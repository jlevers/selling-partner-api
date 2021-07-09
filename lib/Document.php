<?php

namespace SellingPartnerApi;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
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
    private $documentType;
    private $data;
    private $tmpFilename;

    public $successfulFeedRecords = null;
    public $failedFeedRecords = null;

    /**
     * @param Model\(Reports\ReportDocument|Feeds\FeedDocument|Feeds\CreateFeedDocumentResult) $documentInfo
     *      The payload of a successful call to getReportDocument, createFeedDocument, or getFeedDocument
     * @param ?array['contentType' => string, 'name' => string] $documentType
     *      Not required if $documentInfo is of type FeedDocument. Otherwise, should be one
     *      of the constants defined in ReportType or FeedType.
     */
    public function __construct(object $documentInfo, ?array $documentType = ReportType::__FEED_RESULT_REPORT) {
        // Make sure $documentInfo is a valid type
        if (!(
            $documentInfo instanceof ReportDocument ||
            $documentInfo instanceof FeedDocument ||
            $documentInfo instanceof CreateFeedDocumentResult
        )) {
            $msg = "documentInfo must be one of the following types: Model\Feeds\CreateFeedDocumentResult, Model\Feeds\FeedDocument, Model\Reports\ReportDocument";
            throw new RuntimeException($msg);
        }

        if ($documentType === null) {
            throw new RuntimeException('$documentType cannot be null');
        }

        $this->contentType = $documentType['contentType'];
        $this->documentType = $documentType['name'];

        $validContentTypes = ContentType::getContentTypes();
        if (!in_array($this->contentType, array_values($validContentTypes))) {
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
    }

    /**
     * Downloads the document data, and optionally parses it into a different format based on its content type.
     *
     * @param ?bool $postProcess If true, parse document contents based on the document's content type.
     *      CSV or TAB: a 2D array of (associative) report rows
     *      JSON: a nested array of data (result of json_decode)
     *      PDF or PLAIN: the raw, unmodified document contents
     *      XLSX: a PhpOffice\PhpSpreadsheet\Spreadsheet object
     *      XML: a SimpleXML object
     *
     * @return string The raw (unencrypted) document contents.
     */
    public function download(?bool $postProcess = true): string {
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

        // Don't try to parse report data. Useful for very large reports, or if someone
        // wants to do custom parsing
        if (!$postProcess) {
            $this->data = $contents;
            return $contents;
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
                $lines = explode("\n", $contents);

                // Handle the extra data at the beginning of feed processing reports
                if ($this->documentType === ReportType::__FEED_RESULT_REPORT['name']) {
                    array_shift($lines);  // Skip 1st line
                    $totalProcessedLine = str_getcsv($lines[0], $sep);
                    $processedSuccessfullyLine = str_getcsv($lines[1], $sep);
                    // Remove the last two parsed lines, plus an additional empty line
                    $lines = array_slice($lines, 3);

                    // Save the number of feed records processed successfully and unsuccessfully
                    $totalProcessed = intval($totalProcessedLine[array_key_last($totalProcessedLine)]);
                    $this->successfulFeedRecords = intval($processedSuccessfullyLine[array_key_last($processedSuccessfullyLine)]);
                    $this->failedFeedRecords = $totalProcessed - $this->successfulFeedRecords;
                }

                $data = array_map(fn ($line) => str_getcsv($line, $sep), $lines);
                if (count($data) > 1) {
                    // Sometimes the final line of a file consists of a single null value. If so, delete it
                    $lastRow = $data[count($data) - 1];
                    if (count($lastRow) === 1 && $lastRow[0] === null) {
                        array_pop($data);
                    }
                }

                // Turn each $data subarray into an associative array with the headers as keys
                array_walk($data, function(&$a) use ($data) {
                    $a = array_combine($data[0], $a);
                });
                // Remove headers line
                array_shift($data);

                $this->data = $data;
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
        $encrypted = openssl_encrypt($feedData, static::ENCRYPTION_SCHEME, $this->key, OPENSSL_RAW_DATA, $this->iv);

        $client = new Client();
        $response = $client->put($this->url, [
            RequestOptions::HEADERS => [
                "content-type" => $this->contentType,
                "host" => parse_url($this->url, PHP_URL_HOST),
            ],
            RequestOptions::BODY => $encrypted,
        ]);

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
