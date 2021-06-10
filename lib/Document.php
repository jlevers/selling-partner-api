<?php

namespace SellingPartnerApi;

use Cyberdummy\GzStream;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\RequestOptions;
use Jsq\EncryptionStreams;

use SellingPartnerApi\Model;

class Document
{
    public const ENCRYPTION_SCHEME = "AES-256-CBC";
    public const VALID_CONTENT_TYPES = ["text/xml", "text/tab-separated-values", "text/csv"];

    private $iv;
    private $key;
    private $url;
    private $compressionAlgo;
    private $contentType;
    private $data;

    /**
     * @param Model\(Report\ReportDocument|Feeds\FeedDocument|Feeds\CreateFeedDocumentResult) $documentInfo
     *      The payload of a successful call to getReportDocument, createFeedDocument, or getFeedDocument
     * @param ?string $contentType The content type of the document. Defaults to text/xml.
     */
    public function __construct(object $documentInfo, ?string $contentType = "text/xml") {
        if (
            !($documentInfo instanceof Model\Reports\ReportDocument)
            && !($documentInfo instanceof Model\Feeds\FeedDocument)
            && !($documentInfo instanceof Model\Feeds\CreateFeedDocumentResult)
        ) {
            $msg = "documentInfo must be one of the following types: ReportDocument, FeedDocument, CreateFeedDocumentResult";
            throw new \Exception($msg);
        }

        // Not defining a charset on the contentType throws an 400 - Invalid Input error from SP-API.
        // That's why we must only check the first part of the contentType.
        // Example: "text/tab-separated-values; charset=UTF-8"
        $arrContentTypeParts = explode(";", $contentType);
        if (!in_array(trim($arrContentTypeParts[0]), static::VALID_CONTENT_TYPES)) {
            throw new \InvalidArgumentException("valid contentType values are: " . implode(", ", static::VALID_CONTENT_TYPES));
        }

        $this->url = $documentInfo->getUrl();
        $encryptionDetails = $documentInfo->getEncryptionDetails();
        $this->key = base64_decode($encryptionDetails->getKey());
        $this->iv = base64_decode($encryptionDetails->getInitializationVector());

        if (method_exists($documentInfo, "getCompressionAlgorithm")) {
            $this->compressionAlgo = $documentInfo->getCompressionAlgorithm() ?? null;
        }

        $this->contentType = $contentType;
    }

    public function download(): string {
        $client = new Client();
        $stream = $client->get($this->url, [RequestOptions::STREAM => true])->getBody();

        if (!$stream->isReadable()) {
            throw new \Exception("Download file stream is unreadable.");
        }

        $cipherMethod = new EncryptionStreams\Cbc($this->iv);
        $stream = new EncryptionStreams\AesDecryptingStream($stream, $this->key, $cipherMethod);

        if ($this->compressionAlgo !== null) {
            if ($this->compressionAlgo === "GZIP") {
                $stream = new GzStream\GzStreamGuzzle($stream);
            }
        }

        // Documents are ISO-8859-1 encoded
        $contents = utf8_encode($stream->getContents());
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
            throw new \Exception("Error creating input stream (php://memory)\n");
        }

        // Write the data to an in-memory feed to make it easier to encrypt chunks of it at a time.
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
            throw new \Exception("Upload failed ({$response->getStatusCode()}): {$response->getBody()}");
        }
    }

    public function getData() {
        if(isset($this->data)) {
            return $this->data;
        }
        return false;
    }
}
