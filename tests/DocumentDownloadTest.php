<?php

declare(strict_types=1);

namespace SellingPartnerApi\Tests;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Utils;
use PHPUnit\Framework\TestCase;
use Saloon\Config;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use SellingPartnerApi\Authentication\GetAccessTokenRequest;
use SellingPartnerApi\Enums\Endpoint;
use SellingPartnerApi\Seller\ReportsV20210630\Requests\GetReportDocument;
use SellingPartnerApi\Seller\ReportsV20210630\Responses\ReportDocument;
use SellingPartnerApi\SellingPartnerApi;

class DocumentDownloadTest extends TestCase
{
    private $mockClient;

    private $mockDownloadResponseBody1;

    private $mockDownloadResponseBody2;

    private $mockDownloadResponse1;

    private $mockDownloadResponse2;

    protected function setUp(): void
    {
        MockClient::destroyGlobal();
        Config::preventStrayRequests();
    }

    private function prepareMockData($realEncoding, $responseEnconding): void
    {
        $this->mockClient = new MockClient([
            GetAccessTokenRequest::class => fn () => MockResponse::make([
                'access_token' => 'access-token',
                'token_type' => 'bearer',
                'expires_in' => 3600,
                'refresh_token' => 'refresh-token',
            ]),
            GetReportDocument::class => MockResponse::make([
                'reportDocumentId' => 'TEST_ID',
                'url' => "https://test.com/{$realEncoding}EncodedFile.txt",
            ]),
        ]);

        $this->mockDownloadResponseBody1 = Utils::streamFor(
            fopen(
                "./tests/MockData/{$realEncoding}EncodedFile.txt",
                'r+',
            ),
        );
        $this->mockDownloadResponse1 = new Response(
            200,
            [
                'Content-Type' => "text/tab-separated-values; charset={$responseEnconding}",
                'host' => 'test.com',
            ],
            $this->mockDownloadResponseBody1,
        );

        $this->mockDownloadResponseBody2 = Utils::streamFor(
            fopen(
                "./tests/MockData/{$realEncoding}EncodedFile.txt",
                'r+',
            ),
        );
        $this->mockDownloadResponse2 = new Response(
            200,
            [
                'Content-Type' => "text/tab-separated-values; charset={$responseEnconding}",
                'host' => 'test.com',
            ],
            $this->mockDownloadResponseBody2,
        );
    }

    public function test_document_download_cp932(): void
    {
        $this->prepareMockData('CP932', 'CP932');

        $mockDownload = new MockHandler([$this->mockDownloadResponse1, $this->mockDownloadResponse2]);
        $stack = HandlerStack::create($mockDownload);
        $client = new HttpClient(['handler' => $stack]);

        $connector = SellingPartnerApi::seller(
            clientId: 'client-id',
            clientSecret: 'client-secret',
            refreshToken: 'refresh-token',
            endpoint: Endpoint::FE_SANDBOX,
        );
        $connector->withMockClient($this->mockClient);

        $api = $connector->reportsV20210630();
        $reportDocument = $api->getReportDocument('TEST_ID', 'GET_MERCHANT_LISTINGS_ALL_DATA');
        $docToDownload = $reportDocument->dto();
        $this->assertInstanceOf(ReportDocument::class, $docToDownload);

        // Unprocessed document data is CP932 encoded
        $data = $docToDownload->download('GET_MERCHANT_LISTINGS_ALL_DATA', false, null, $client);
        $this->assertEquals('CP932', mb_detect_encoding($data, 'CP932, UTF-8', true));
        // Processed document data is UTF-8 encoded
        $data = $docToDownload->download('GET_MERCHANT_LISTINGS_ALL_DATA', true, null, $client);
        $this->assertArrayHasKey(0, $data);
        $this->assertArrayHasKey('Field1', $data[0]);
        $this->assertEquals('UTF-8', mb_detect_encoding($data[0]['Field1'], 'UTF-8, CP932', true));
        $this->assertEquals('こんにちは世界', $data[0]['Field1']);
    }

    // Some EU countries report content-type as CP1252 when they are actually ISO-8859-1 encoded
    public function test_document_download_cp1252(): void
    {
        $this->prepareMockData('ISO-8859-1', 'CP1252');

        $mockDownload = new MockHandler([$this->mockDownloadResponse1, $this->mockDownloadResponse2]);
        $stack = HandlerStack::create($mockDownload);
        $client = new HttpClient(['handler' => $stack]);

        $connector = SellingPartnerApi::seller(
            clientId: 'client-id',
            clientSecret: 'client-secret',
            refreshToken: 'refresh-token',
            endpoint: Endpoint::FE_SANDBOX,
        );
        $connector->withMockClient($this->mockClient);

        $api = $connector->reportsV20210630();
        $reportDocument = $api->getReportDocument('TEST_ID', 'GET_MERCHANT_LISTINGS_ALL_DATA');
        $docToDownload = $reportDocument->dto();
        $this->assertInstanceOf(ReportDocument::class, $docToDownload);

        // Unprocessed document data is ISO-8859-1 encoded
        $data = $docToDownload->download('GET_MERCHANT_LISTINGS_ALL_DATA', false, null, $client);
        $this->assertEquals('ISO-8859-1', mb_detect_encoding($data, 'ISO-8859-1', true));
        // Processed document data is UTF-8 encoded
        $data = $docToDownload->download('GET_MERCHANT_LISTINGS_ALL_DATA', true, null, $client);
        $this->assertArrayHasKey(0, $data);
        $this->assertArrayHasKey('Field1', $data[0]);
        $this->assertEquals('UTF-8', mb_detect_encoding($data[0]['Field1'], 'UTF-8, ISO-8859-1', true));
        $this->assertEquals('Gähnen', $data[0]['Field1']);
    }
}
