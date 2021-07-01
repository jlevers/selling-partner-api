<?php

namespace SellingPartnerApi;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\RequestOptions;
use Jsq\EncryptionStreams;
use RuntimeException;

use SellingPartnerApi\Model\Feeds\CreateFeedDocumentResult;
use SellingPartnerApi\Model\Feeds\FeedDocument;
use SellingPartnerApi\Model\Reports\ReportDocument;

class Document
{
    public const ENCRYPTION_SCHEME = "AES-256-CBC";

    private $iv;
    private $key;
    private $url;
    private $compressionAlgo;
    private $contentType;
    private $data;

    /**
     * @param Model\(Reports\ReportDocument|Feeds\FeedDocument|Feeds\CreateFeedDocumentResult) $documentInfo
     *      The payload of a successful call to getReportDocument, createFeedDocument, or getFeedDocument
     * @param ?array['contentType' => string, 'name' => string] $documentType
     *      Not required if $documentInfo is of type CreateFeedDocumentResult. Otherwise, should be one
     *      of the constants defined in ReportType or FeedType.
     */
    public function __construct(object $documentInfo, ?array $documentType = null) {
        // Make sure $documentInfo is a valid type
        if (!(
            $documentInfo instanceof ReportDocument ||
            $documentInfo instanceof FeedDocument ||
            $documentInfo instanceof CreateFeedDocumentResult
        )) {
            $msg = "documentInfo must be one of the following types: Model\Feeds\CreateFeedDocumentResult, Model\Feeds\FeedDocument, Model\Reports\ReportDocument";
            throw new RuntimeException($msg);
        }

        // All feed result documents are tab separated values files
        if ($documentInfo instanceof CreateFeedDocumentResult) {
            $documentType = ReportType::__FEED_RESULT_REPORT;
            $this->contentType = $documentType['contentType'];
        } else {
            if ($documentType === null) {
                throw new RuntimeException('$documentType must be passed when $documentInfo is of type FeedDocument or ReportDocument');
            }
            $this->contentType = $documentType['contentType'];
        }

        $this->url = $documentInfo->getUrl();
        $encryptionDetails = $documentInfo->getEncryptionDetails();
        $this->key = base64_decode($encryptionDetails->getKey());
        $this->iv = base64_decode($encryptionDetails->getInitializationVector());

        if (method_exists($documentInfo, "getCompressionAlgorithm")) {
            $this->compressionAlgo = $documentInfo->getCompressionAlgorithm() ?? null;
        }
    }

    public function download(): string {
        $rawContents = file_get_contents($this->url);
        $maybeZippedContents = openssl_decrypt($rawContents, static::ENCRYPTION_SCHEME, $this->key, OPENSSL_RAW_DATA, $this->iv);

        $contents = null;
        if ($this->compressionAlgo !== null) {
            if ($this->compressionAlgo === "GZIP") {
                $contents = gzdecode($maybeZippedContents);
            }
        } else {
            $contents = $maybeZippedContents;
        }

        // Documents are ISO-8859-1 encoded
        $contents = utf8_encode($contents);
        if ($this->contentType === "text/xml") {
            $this->data = simplexml_load_string($contents);
        } else if ($this->contentType === "text/tab-separated-values" || $this->contentType === "text/csv") {
            $sep = "\t";
            if ($this->contentType === "text/csv") {
                $sep = ",";
            }

            $bareStream = fopen("php://memory", "rw");
            fwrite($bareStream, $contents);
            rewind($bareStream);

            $data = [];
            $header = fgetcsv($bareStream, 0, $sep);
            while (($line = fgetcsv($bareStream, 0, $sep)) !== false) {
                $row = [];
                foreach ($line as $idx => $val) {
                    $row[$header[$idx]] = $val;
                }
                $data[] = $row;
            }
            $this->data = $data;
            fclose($bareStream);
        }

        return $contents;
    }

    /**
     * Uploads data to the document specified in the constructor.
     *
     * @param string $feedData The contents of the feed to be uploaded
     *
     * @return void
     */
    public function upload(string $feedData): void {
        $stream = fopen("php://memory", "r+");
        if (!$stream) {
            throw new RuntimeException("Error creating input stream (php://memory)\n");
        }

        // Write the data to an in-memory stream to make it easier to encrypt chunks of it at a time.
        // Amazon requires their data to be encrypted at rest, which prevents us from writing the data
        // to a file and encrypting it from there
        $stream = Psr7\Utils::streamFor($stream);
        $stream->write($feedData);
        $stream->rewind();

        $cipherMethod = new EncryptionStreams\Cbc($this->iv);
        $stream = new EncryptionStreams\AesEncryptingStream($stream, $this->key, $cipherMethod);
        $client = new Client();

        $response = $client->put($this->url, [
            RequestOptions::HEADERS => [
                "content-type" => $this->contentType,
                "host" => parse_url($this->url, PHP_URL_HOST),
            ],
            RequestOptions::BODY => $stream,
        ]);

        $stream->close();

        if ($response->getStatusCode() >= 300) {
            throw new RuntimeException("Upload failed ({$response->getStatusCode()}): {$response->getBody()}");
        }
    }

    public function getData() {
        return isset($this->data) ? $this->data : false;
    }
}
