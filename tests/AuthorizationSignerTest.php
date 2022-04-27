<?php

namespace SellingPartnerApi\Tests;

use GuzzleHttp\Psr7\Request;
use PHPUnit\Framework\TestCase;
use SellingPartnerApi\Endpoint;
use SellingPartnerApi\Credentials;
use SellingPartnerApi\AuthorizationSigner;

class AuthorizationSignerTest extends TestCase
{
    public function testItSingsRequests()
    {
        $key = 'the-awsAccessKeyId';
        $endpoint = Endpoint::EU_SANDBOX;

        $signer = new AuthorizationSigner($endpoint);
        $signer->setRequestTime(
            new \DateTime('2022-04-26 20:23:00', new \DateTimeZone('UTC'))
        );
        $signedRequest = $signer->sign(
            new Request('GET', '/test/uri'),
            new Credentials($key, 'awsSecretAccessKey')
        );

        $expectedAuthorization = "AWS4-HMAC-SHA256 Credential={$key}/20220426/{$endpoint['region']}/execute-api/aws4_request, SignedHeaders=, Signature=e18ee36e2352950d2de9acfa61a4278f7913f42b2bcd03e80db6748f7758c053";

        $this->assertEquals($expectedAuthorization, $signedRequest->getHeaderLine('Authorization'));
        $this->assertArrayHasKey('x-amz-date', $signedRequest->getHeaders());
    }
}