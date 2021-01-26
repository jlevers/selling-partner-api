<?php

namespace Evers\SellingPartnerApi;

use Cyberdummy\GzStream;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Jsq\EncryptionStreams;

use Evers\SellingPartnerApi\Model;

class Document
{
    public const ENCRYPTION_SCHEME = "AES-256-CBC";

    private $iv;
    private $key;
    private $url;
    private $compressionAlgo;
    private $downloadStream = null;
    private $contentType = null;

    /**
     * @param Model\(ReportDocument|FeedDocument|CreateFeedDocumentResult) $documentInfo
     *      The payload of a successful call to getReportDocument, createFeedDocument, or getFeedDocument
     * @param ?string $contentType The content type of the document. Only required when
     *      uploading a document.
     */
    public function __construct(object $documentInfo, ?string $contentType = null) {
        if (
            !($documentInfo instanceof Model\ReportDocument)
            && !($documentInfo instanceof Model\FeedDocument)
            && !($documentInfo instanceof Model\CreateFeedDocumentResult)
        ) {
            $msg = '$documentInfo must be one of the following types: ReportDocument, FeedDocument, CreateFeedDocumentResult';
            throw new \Exception($msg);
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

    public function __destruct() {
        if ($this->stream !== null) {
            $this->stream->close();
        }
    }

    public function download(): void {
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

        $this->downloadStream = $stream;
    }

    public function upload(): void {
        if ($this->contentType === null) {
            throw new \Exception("Can't call upload() on a Document without a contentType");
        }

        $stream = fopen("php://memory", "r+");
        if (!$stream) {
            throw new \Exception("Error creating input stream (php://memory)\n");
        }

        // Write the data to an in-memory feed to make it easier to encrypt chunks of it at a time.
        // Amazon requires their data to be encrypted at rest, which prevents us from writing the data
        // to a file and encrypting it from there
        fwrite($stream, $data);
        rewind($stream);

        $cipherMethod = new EncryptionStreams\Cbc($this->iv);
        $stream = new EncryptionStreams\AesEncryptingStream($stream, $this->key, $cipherMethod);
        $client = new Client();

        $response = $client->post($this->url, [
            RequestOptions::HEADERS => [
                "content-type" => $this->contentType,
                "host" => parse_url($this->url, PHP_URL_HOST),
            ],
            RequestOptions::BODY => $stream,
        ]);

        fclose($stream);

        if ($response->getStatusCode() >= 300) {
            throw new \Exception("Upload failed ({$response->getStatusCode()}): {$response->getBody()}");
        }
    }
}
