<?php

namespace SellingPartnerApi;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use PhpOffice\PhpSpreadsheet\IOFactory;
use RuntimeException;

use SellingPartnerApi\Model\Feeds\CreateFeedDocumentResponse;
use SellingPartnerApi\Model\Feeds\FeedDocument;
use SellingPartnerApi\Model\Reports\ReportDocument;

class Document
{
    public const ENCRYPTION_SCHEME = "AES-256-CBC";

    private $url;
    private $compressionAlgo;
    private $contentType;
    private $data;
    private $tmpFilename;

    public $successfulFeedRecords = null;
    public $failedFeedRecords = null;

    /**
     * @param Model\(Reports\ReportDocument|Feeds\FeedDocument|Feeds\CreateFeedDocumentResponse) $documentInfo
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
            $documentInfo instanceof CreateFeedDocumentResponse
        )) {
            $msg = "documentInfo must be one of the following types: Model\Feeds\CreateFeedDocumentResponse, Model\Feeds\FeedDocument, Model\Reports\ReportDocument";
            throw new RuntimeException($msg);
        }

        if ($documentType === null) {
            throw new RuntimeException('$documentType cannot be null');
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

        $this->url = $documentInfo->getUrl();

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

        $contents = null;
        if ($this->compressionAlgo !== null) {
            if ($this->compressionAlgo === "GZIP") {
                $contents = gzdecode($rawContents);
            }
        } else {
            $contents = $rawContents;
        }

        // Don't try to parse report data. Useful for very large reports, or if someone
        // wants to do custom parsing
        if (!$postProcess) {
            $this->data = $contents;
            return $contents;
        }

        // Documents are ISO-8859-1 encoded, which messes up the data when we read it directly
        // via SimpleXML or as a plain TAB/CSV, but the original encoding is required to parse XLSX and PDF reports
        if (!($this->contentType === ContentType::XLSX || $this->contentType === ContentType::PDF)) {
            $contents = utf8_encode($contents);
        }

        switch ($this->contentType) {
            case ContentType::CSV:
            case ContentType::TAB:
            case ContentType::XLSX:
                $this->tmpFilename = tempnam(sys_get_temp_dir(), "tempdoc_spapi");
                $tempFile = fopen($this->tmpFilename, "r+");
                fwrite($tempFile, $contents);
                fclose($tempFile);

                $spreadsheet = IOFactory::load($this->tmpFilename);
                if ($this->contentType !== ContentType::XLSX) {
                    $sheet = $spreadsheet->getSheet(0)->toArray();
                    // Turn each row of data into an associative array with the headers as keys
                    array_walk($sheet, function(&$row) use ($sheet) {
                        $row = array_combine($sheet[0], $row);
                    });
                    // Remove headers line
                    array_shift($sheet);
                    $this->data = $sheet;
                } else {
                    $this->data = $spreadsheet;
                }

                break;
            case ContentType::JSON:
                $this->data = json_decode($contents);
                break;
            case ContentType::PDF:
            case ContentType::PLAIN:
                $this->data = $contents;
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
        $client = new Client();
        $response = $client->put($this->url, [
            RequestOptions::HEADERS => [
                "content-type" => $this->contentType,
                "host" => parse_url($this->url, PHP_URL_HOST),
            ],
            RequestOptions::BODY => $feedData,
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
