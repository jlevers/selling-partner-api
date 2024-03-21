<?php

declare(strict_types=1);

namespace SellingPartnerApi\Traits;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Iterator;
use Psr\Http\Message\StreamInterface;
use RuntimeException;

trait UploadsDocument
{
    public function upload(
        string $feedType,
        string|StreamInterface|callable|Iterator $data,
        ?string $charset = null
    ): void {
        $client = new Client();
        $response = $client->put($this->url, [
            RequestOptions::HEADERS => [
                'Content-Type' => static::withContentType($feedType, $charset),
                'Host' => parse_url($this->url, PHP_URL_HOST),
            ],
            RequestOptions::BODY => $data,
        ]);

        if ($response->getStatusCode() >= 300) {
            throw new RuntimeException(
                "Document upload failed ({$response->getStatusCode()}): {$response->getBody()}"
            );
        }
    }

    protected static function getContentType(string $feedType, ?string $charset = null): string
    {
        $feedTypes = json_decode(file_get_contents(RESOURCE_DIR.'/feeds.json'), true);
        $contentType = $feedTypes[$feedType];

        if (! $contentType) {
            throw new RuntimeException("Unknown feed type '{$feedType}'");
        }

        if ($charset !== null) {
            $contentType .= "; charset={$charset}";
        }

        return $contentType;
    }
}
