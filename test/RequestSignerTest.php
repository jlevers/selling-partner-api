<?php

namespace SellingPartnerApi\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use SellingPartnerApi\Contract\RequestSignerContract;
use SellingPartnerApi\Authentication;
use SellingPartnerApi\Configuration;
use SellingPartnerApi\Endpoint;

class RequestSignerTest extends TestCase
{
    private const EMPTY_CONFIG = [
        'lwaClientId' => '',
        'lwaClientSecret' => '',
        'lwaRefreshToken' => '',
        'awsAccessKeyId' => '',
        'awsSecretAccessKey' => '',
        'endpoint' => Endpoint::EU_SANDBOX,
    ];

    public function testItUsesInjectedRequestSigner()
    {
        $request = new Request('GET', '/test/uri');

        $requestSigner = $this->createMock(RequestSignerContract::class);
        $requestSigner->expects($this->once())
            ->method('signRequest')
            ->willReturn($request);

        $config = new Configuration(
            self::EMPTY_CONFIG + [
                'requestSigner' => $requestSigner,
            ],
        );

        $config->signRequest($request);
    }

    public function testItUsesDefaultRequestSigner()
    {
        $config = new Configuration(self::EMPTY_CONFIG);
        $this->assertInstanceOf(Authentication::class, $config->getRequestSigner());
    }

    public function testItSingsRequestsWithDefaultRequestSigner()
    {
        $client = new Client([
            'handler' => new MockHandler([
                new Response(200, [], '{"access_token": "the-access_token", "expires_in": 60}')
            ]),
        ]);
        $config = new Configuration(
            self::EMPTY_CONFIG + [
                'authenticationClient' => $client,
            ],
        );
        $signedRequest = $config->signRequest(new Request('GET', '/test/uri'));

        $this->assertArrayHasKey('Authorization', $signedRequest->getHeaders());
        $this->assertArrayHasKey('x-amz-access-token', $signedRequest->getHeaders());
        $this->assertArrayHasKey('x-amz-date', $signedRequest->getHeaders());
    }
}