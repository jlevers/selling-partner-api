<?php

namespace SellingPartnerApi\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use SellingPartnerApi\Contract\RequestSigner as RequestSignerContract;
use SellingPartnerApi\Authentication;
use SellingPartnerApi\Endpoint;
use SellingPartnerApi\RequestSigner;

class AuthenticationTest extends TestCase
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
        $accessToken = 'the-access_token';

        $requestSigner = $this->createMock(RequestSignerContract::class);
        $requestSigner->expects($this->once())
            ->method('sign')
            ->willReturn($request);

        $client = new Client([
            'handler' => new MockHandler([
                new Response(200, [], "{\"access_token\": \"{$accessToken}\", \"expires_in\": 60}")
            ]),
        ]);

        $auth = new Authentication(
            self::EMPTY_CONFIG + [
                'requestSigner' => $requestSigner,
                'authenticationClient' => $client,
            ]
        );

        $this->assertEquals(
            $accessToken,
            $auth->signRequest($request)->getHeaderLine('x-amz-access-token')
        );
    }

    public function testItUsesDefaultRequestSigner()
    {
        $auth = new Authentication(self::EMPTY_CONFIG);
        $this->assertInstanceOf(RequestSigner::class, $auth->getRequestSigner());
    }
}