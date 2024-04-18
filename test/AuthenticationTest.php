<?php

namespace SellingPartnerApi\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use SellingPartnerApi\Contract\AuthorizationSignerContract;
use SellingPartnerApi\Authentication;
use SellingPartnerApi\Endpoint;
use SellingPartnerApi\AuthorizationSigner;

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

    public function testItUsesInjectedAuthorizationSigner()
    {
        $request = new Request('GET', '/test/uri');
        $accessToken = 'the-access_token';

        $authSigner = $this->createMock(AuthorizationSignerContract::class);
        $authSigner->expects($this->once())
            ->method('sign')
            ->willReturn($request);

        $client = new Client([
            'handler' => new MockHandler([
                new Response(200, [], "{\"access_token\": \"{$accessToken}\", \"expires_in\": 60}")
            ]),
        ]);

        $auth = new Authentication(
            self::EMPTY_CONFIG + [
                'authorizationSigner' => $authSigner,
                'authenticationClient' => $client,
            ]
        );

        $this->assertEquals(
            $accessToken,
            $auth->signRequest($request)->getHeaderLine('x-amz-access-token')
        );
    }

    public function testItUsesDefaultAuthorizationSigner()
    {
        $auth = new Authentication(self::EMPTY_CONFIG);
        $this->assertInstanceOf(AuthorizationSigner::class, $auth->getAuthorizationSigner());
    }
}