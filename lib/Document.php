<?php

namespace SellingPartnerApi;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\RequestOptions;
use Jsq\EncryptionStreams;
use PhpOffice\PhpSpreadsheet\IOFactory;
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
    private $tmpFilename;

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
            
            $validContentTypes = ContentType::getContentTypes();
            if (!in_array($this->contentType, array_values($validContentTypes))) {
                $readableContentTypes = [];
                foreach ($validContentTypes as $name => $value) {
                    $readableContentTypes[] = "SellingPartnerApi\ContentType::{$name} ($value)";
                }
                throw new \InvalidArgumentException("Valid content types are: " . implode(", ", $readableContentTypes));
            }
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

        // Documents are ISO-8859-1 encoded, which messes up the data when we read it directly
        // via SimpleXML or fgetcsv, but the original encoding is required to parse XLSX and PDF reports
        if (!($this->contentType === ContentType::XLSX || $this->contentType === ContentType::PDF)) {
            $contents = utf8_encode($contents);
        }

        switch ($this->contentType) {
            case ContentType::CSV:
            case ContentType::TAB:
                $sep = $this->contentType === ContentType::CSV ? "," : "\t";
    
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
                break;
            case ContentType::JSON:
                $this->data = json_decode($contents);
                break;
            case ContentType::PDF:
            case ContentType::PLAIN:
                $this->data = $contents;
                break;
            case ContentType::XLSX:
                $this->tmpFilename = tempnam(sys_get_temp_dir(), "tempdoc_spapi");
                $tempFile = fopen($this->tmpFilename, "r+");
                fwrite($tempFile, $contents);
                fclose($tempFile);
    
                $spreadsheet = IOFactory::load($this->tmpFilename);
                $this->data = $spreadsheet;
                break;
            case ContentType::XML:
                $this->data = simplexml_load_string($contents);
                break;               
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

    public function __destruct() {
        if (isset($this->tempFilename)) {
            unlink($this->tempFilename);
        }
    }
}
