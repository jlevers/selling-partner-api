<?php

declare(strict_types=1);

namespace SellingPartnerApi\Traits;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use InvalidArgumentException;
use RuntimeException;

trait DownloadsDocument
{
    public function download(?string $reportType = null, bool $postProcess = true): mixed
    {
        if (! $reportType && $postProcess) {
            throw new InvalidArgumentException(
                'Report type is required to parse report data. Either pass $reportType or set $postProcess to false'
            );
        }

        $client = new Client();

        try {
            $response = $client->request('GET', $this->url, ['stream' => true]);
        } catch (ClientException $e) {
            $response = $e->getResponse();
            if ($response->getStatusCode() === 404) {
                throw new RuntimeException("Report document not found ({$response->getStatusCode()}): {$response->getBody()}");
            } else {
                throw $e;
            }
        }

        $rawContents = $response->getBody()->getContents();

        $contents = $rawContents;
        if ($this->compressionAlgorithm === 'GZIP') {
            $contents = gzdecode($rawContents);
        }

        // if (! $postProcess) {
        return $contents;
        // }

        // $contentType = static::contentType($reportType);
    }

    protected static function contentType(string $reportType): string
    {
        $reports = json_decode(file_get_contents(RESOURCE_DIR.'/reports.json'), true);
        $contentType = $reports[$reportType]['contentType'];

        if (! $contentType) {
            throw new RuntimeException("Unknown report type '{$reportType}'");
        }

        return $contentType;
    }
}
