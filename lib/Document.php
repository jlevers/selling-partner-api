<?php

namespace SellingPartnerApi;

use Cyberdummy\GzStream;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\RequestOptions;
use Jsq\EncryptionStreams;
use PhpOffice\PhpSpreadsheet\IOFactory;

use SellingPartnerApi\Model;

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
     * @param Model\(Report\ReportDocument|Feeds\FeedDocument|Feeds\CreateFeedDocumentResult) $documentInfo
     *      The payload of a successful call to getReportDocument, createFeedDocument, or getFeedDocument
     * @param ?string $contentType The content type of the document. Defaults to ContentType::XML.
     */
    public function __construct(object $documentInfo, ?string $contentType = ContentType::XML) {
        if (
            !($documentInfo instanceof Model\Reports\ReportDocument)
            && !($documentInfo instanceof Model\Feeds\FeedDocument)
            && !($documentInfo instanceof Model\Feeds\CreateFeedDocumentResult)
        ) {
            $msg = "documentInfo must be one of the following types: ReportDocument, FeedDocument, CreateFeedDocumentResult";
            throw new \Exception($msg);
        }


        $validContentTypes = ContentType::getContentTypes();
        if (!in_array($contentType, array_values($validContentTypes))) {
            $readableContentTypes = [];
            foreach ($validContentTypes as $name => $value) {
                $readableContentTypes[] = "SellingPartnerApi\ContentType::{$name} ($value)";
            }
            throw new \InvalidArgumentException("Valid content types are: " . implode(", ", $readableContentTypes));
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

        // Documents are ISO-8859-1 encoded, which messes up the data when we read it directly
        // via SimpleXML or fgetcsv, but the original encoding is required to parse XLSX reports
        if ($this->contentType !== ContentType::XLSX) {
            $contents = utf8_encode($stream->getContents());
        } else {
            $contents = $stream->getContents();
        }

        if ($this->contentType === ContentType::XML) {
            $this->data = simplexml_load_string($contents);
        } else if ($this->contentType === ContentType::TAB || $this->contentType === ContentType::CSV) {
            $sep = "\t";
            if ($this->contentType === ContentType::CSV) {
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
        } else if ($this->contentType === ContentType::XLSX) {
            $this->tmpFilename = tempnam(sys_get_temp_dir(), "tempdoc_spapi");
            $tempFile = fopen($this->tmpFilename, "r+");
            fwrite($tempFile, $contents);
            fclose($tempFile);

            $spreadsheet = IOFactory::load($this->tmpFilename);
            $this->data = $spreadsheet;
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

    public function __destruct() {
        if (isset($this->tempFilename)) {
            unlink($this->tempFilename);
        }
    }
}
