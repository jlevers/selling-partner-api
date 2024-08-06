<?php

declare(strict_types=1);

namespace SellingPartnerApi\Tests;

use PHPUnit\Framework\TestCase;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\OAuth2\GetAccessTokenRequest;
use SellingPartnerApi\Enums\Marketplace;
use SellingPartnerApi\Exceptions\OAuthException;
use SellingPartnerApi\OAuth;

class OAuthTest extends TestCase
{
    public function testMakeAuthUrl(): void
    {
        $oauth = new OAuth('client-id', 'client-secret', 'https://example.com/redirect');
        $authUrl = $oauth->getAuthorizationUri(
            appId: 'app-id',
            state: 'qwertyuiop1234567890',
            marketplace: Marketplace::BR,
        );

        $url = explode('?', $authUrl)[0];

        $this->assertEquals(
            'https://sellercentral.amazon.com.br/apps/authorize/consent',
            $url
        );

        parse_str(parse_url($authUrl, PHP_URL_QUERY), $queryParams);
        ksort($queryParams);

        $this->assertEquals(
            [
                'application_id' => 'app-id',
                'redirect_uri' => 'https://example.com/redirect',
                'state' => 'qwertyuiop1234567890',
                'version' => 'beta',
            ],
            $queryParams
        );
    }

    public function testFailToMakeAuthUrlWithNonSslRedirectUri(): void
    {
        $this->expectException(OAuthException::class);

        $oauth = new OAuth('client-id', 'client-secret', 'http://example.com/redirect');
        $authUrl = $oauth->getAuthorizationUri(
            appId: 'app-id',
            state: 'qwertyuiop1234567890',
            marketplace: Marketplace::BR,
        );
    }

    public function testConvertsAuthCodeToRefreshToken(): void
    {
        $mockClient = new MockClient([
            GetAccessTokenRequest::class => fn () => MockResponse::make([
                'access_token' => 'access-token',
                'token_type' => 'bearer',
                'expires_in' => 3600,
                'refresh_token' => 'refresh-token',
            ]),
        ]);

        $oauth = new OAuth('client-id', 'client-secret', 'https://example.com/redirect');
        $oauth->withMockClient($mockClient);

        $refreshToken = $oauth->getRefreshToken('auth-code');

        $this->assertEquals('refresh-token', $refreshToken);
        $this->assertEquals(
            [
                'grant_type' => 'authorization_code',
                'client_id' => 'client-id',
                'client_secret' => 'client-secret',
                'code' => 'auth-code',
                'redirect_uri' => 'https://example.com/redirect',
            ],
            $mockClient->getLastPendingRequest()->body()->all()
        );
    }
}
