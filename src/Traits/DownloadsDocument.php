<?php

declare(strict_types=1);

namespace SellingPartnerApi\Traits;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7\Header;
use GuzzleHttp\Psr7\InflateStream;
use InvalidArgumentException;
use OpenSpout\Reader\CSV\Options;
use OpenSpout\Reader\CSV\Reader as CSVReader;
use OpenSpout\Reader\XLSX\Options as XLSXOptions;
use OpenSpout\Reader\XLSX\Reader as XLSXReader;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use RuntimeException;
use SellingPartnerApi\Enums\ContentType;
use SimpleXMLElement;

trait DownloadsDocument
{
    protected static string $defaultEncoding = 'UTF-8';

    protected ?string $encoding;

    protected array $documentTypeInfo;

    public function download(
        ?string $documentType = null,
        bool $postProcess = true,
        ?string $encoding = null,
    ): array|string|SimpleXMLElement {
        if (! $documentType && $postProcess) {
            throw new InvalidArgumentException(
                'Document type is required to parse document data. Either pass $documentType or set $postProcess to false'
            );
        }

        $client = new Client;

        if ($documentType) {
            $this->documentTypeInfo = static::documentTypeInfo($documentType);
        }

        try {
            $response = $client->request('GET', $this->url, ['stream' => true]);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            if ($response->getStatusCode() === 404) {
                throw new RuntimeException("Document not found ({$response->getStatusCode()}): {$response->getBody()}");
            } else {
                throw $e;
            }
        }

        $rawContents = $response->getBody()->getContents();
        $contents = $rawContents;

        if ($this->compressionAlgorithm === 'GZIP') {
            $contents = gzdecode($rawContents);
        }

        if (! $postProcess) {
            return $contents;
        }

        $this->encoding = $encoding;
        $contentType = $this->documentTypeInfo['contentType'];
        // Document encodings depend on the target marketplace. English-language documents are
        // typically ISO-8859-1 encoded, which messes up the data when we read it directly via
        // SimpleXML or as a plain TAB/CSV, but the original encoding is required to parse XLSX
        // and PDF documents.
        if (! ($contentType === ContentType::XLSX || $contentType === ContentType::PDF)) {
            $this->encoding = $this->detectEncoding($contents, $response);
            $contents = mb_convert_encoding(
                $contents,
                static::$defaultEncoding,
                $this->encoding ?? mb_internal_encoding()
            );
        }

        return $this->parseDocument($contents);
    }

    /**
     * Downloads the document data as a stream.
     *
     * @return StreamInterface The raw (unencrypted) document stream.
     */
    public function downloadStream(): StreamInterface
    {
        $client = new Client;
        try {
            $response = $client->request('GET', $this->url, ['stream' => true]);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            if ($response->getStatusCode() === 404) {
                throw new RuntimeException(
                    "Document not found ({$response->getStatusCode()}): {$response->getBody()}"
                );
            }
            throw $e;
        }

        $stream = $response->getBody();
        if (strtolower((string) $this->compressionAlgorithm) === 'gzip') {
            $stream = new InflateStream($stream);
        }

        return $stream;
    }

    protected function parseDocument(string $contents): mixed
    {
        switch ($this->documentTypeInfo['contentType']) {
            case ContentType::JSON:
                return json_decode($contents, true);
            case ContentType::PDF:
            case ContentType::PLAIN:
                return $contents;
            case ContentType::XML:
                return new SimpleXMLElement($contents);
            case ContentType::CSV:
            case ContentType::TAB:
            case ContentType::XLSX:
                return $this->parseSpreadsheet($contents);
        }
    }

    protected function parseSpreadsheet(string $contents): array
    {
        $tmpFilename = tempnam(sys_get_temp_dir(), 'tempdoc_spapi');
        $tempFile = fopen($tmpFilename, 'r+');
        fwrite($tempFile, $contents);
        fclose($tempFile);

        $options = match ($this->documentTypeInfo['contentType']) {
            ContentType::CSV => new Options,
            ContentType::TAB => new Options,
            ContentType::XLSX => new XLSXOptions,
        };
        if ($this->documentTypeInfo['contentType'] === ContentType::TAB) {
            $options->FIELD_DELIMITER = "\t";
        }
        if ($this->encoding) {
            $options->ENCODING = $this->encoding;
        }

        // Amazon doesn't use enclosure characters, and passing an empty string to setEnclosure
        // results in the default enclosure being used (a double quote character), so we use a
        // bizarre character to avoid recognizing double quotes as enclosures.
        // Thanks @gregordonsky (https://github.com/gregordonsky) for the idea!
        // There are a couple kinds of reports that use normal double-quote enclosures, so we
        // need to check if this report type is one of them before setting the enclosure char.
        if (! $this->documentTypeInfo['quoteEnclosure']) {
            $options->FIELD_ENCLOSURE = chr(0);
        }

        $reader = match ($this->documentTypeInfo['contentType']) {
            ContentType::CSV, ContentType::TAB => new CSVReader($options),
            ContentType::XLSX => new XLSXReader($options),
        };
        $reader->open($tmpFilename);

        $data = [];
        foreach ($reader->getSheetIterator() as $sheet) {
            $rowIterator = $sheet->getRowIterator();
            $rowIterator->next();
            $header = $rowIterator->current()->toArray();

            foreach ($rowIterator as $row) {
                if ($row->toArray() === $header) {
                    continue;
                }
                $data[] = array_combine($header, $row->toArray());
            }

            // There are no multi-sheet documents
            break;
        }

        return $data;
    }

    protected static function documentTypeInfo(string $documentTypeName): array
    {
        $documentTypeInfo = null;

        // Check feeds first because the file is smaller
        $feedTypes = json_decode(file_get_contents(RESOURCE_DIR.'/feeds.json'), true);
        if (isset($feedTypes[$documentTypeName])) {
            $documentTypeInfo = [
                'name' => $documentTypeName,
                'contentType' => ContentType::from($feedTypes[$documentTypeName]),
                'quoteEnclosure' => false,
            ];
        }

        if (! $documentTypeInfo) {
            $reportTypes = json_decode(file_get_contents(RESOURCE_DIR.'/reports.json'), true);
            if (isset($reportTypes[$documentTypeName])) {
                $documentTypeInfo = $reportTypes[$documentTypeName];
                $documentTypeInfo['name'] = $documentTypeName;
                $documentTypeInfo['contentType'] = ContentType::from($documentTypeInfo['contentType']);
            }
        }

        if (! $documentTypeInfo) {
            throw new InvalidArgumentException("Unknown document type '$documentTypeName'");
        }

        return $documentTypeInfo;
    }

    protected function detectEncoding(string $contents, ResponseInterface $response): string
    {
        // If the encoding is not supported, default to system default encoding
        if ($this->encoding && ! in_array(strtoupper($this->encoding), mb_list_encodings(), true)) {
            $encoding = static::$defaultEncoding;
        } elseif (! $this->encoding) {
            // If encoding is not provided try to automatically detect the encoding from the HTTP response
            $encodings = [static::$defaultEncoding];
            if ($response->hasHeader('Content-Type')) {
                $parsed = Header::parse($response->getHeader('Content-Type'));

                foreach ($parsed as $header) {
                    if ($header['charset'] ?? null) {
                        $headerEncoding = $header['charset'];
                        array_unshift($encodings, $headerEncoding);
                        break;
                    }
                }
            }

            $encoding = mb_detect_encoding($contents, $encodings, true);
        }

        return $encoding;
    }
}
