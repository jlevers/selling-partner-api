<?php

declare(strict_types=1);

namespace SellingPartnerApi;

use DateInterval;
use DateTimeImmutable;
use Saloon\Contracts\OAuthAuthenticator;
use Saloon\Helpers\OAuth2\OAuthConfig;
use Saloon\Http\Connector;
use Saloon\Http\OAuth2\GetAccessTokenRequest;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\OAuth2\ClientCredentialsGrant;
use SellingPartnerApi\Authentication\AccessTokenAuthenticator;
use SellingPartnerApi\Enums\Marketplace;
use SellingPartnerApi\Exceptions\OAuthException;

class OAuth extends Connector
{
    use ClientCredentialsGrant;

    public const TOKEN_URL = 'https://api.amazon.com/auth/o2/token';

    private string $authCode;

    public function __construct(
        protected string $clientId,
        protected string $clientSecret,
        protected string $redirectUri
    ) {
        if (! str_starts_with($this->redirectUri, 'https://')) {
            throw new OAuthException('Redirect URI must use SSL (https://)');
        }

        $this->oauthConfig = OAuthConfig::make()
            ->setClientId($this->clientId)
            ->setClientSecret($this->clientSecret)
            ->setRedirectUri($this->redirectUri)
            ->setTokenEndpoint(self::TOKEN_URL);
    }

    public function resolveBaseUrl(): string
    {
        return self::TOKEN_URL;
    }

    public function getAuthorizationUri(
        string $appId,
        string $state,
        Marketplace $marketplace,
        ?bool $draftApp = true,
    ): string {
        $queryParams = [
            'application_id' => $appId,
            'redirect_uri' => $this->redirectUri,
            'state' => $state,
        ];
        if ($draftApp) {
            $queryParams['version'] = 'beta';
        }

        $baseUrl = match ($marketplace) {
            Marketplace::BR => 'https://sellercentral.amazon.com.br',
            Marketplace::CA => 'https://sellercentral.amazon.ca',
            Marketplace::MX => 'https://sellercentral.amazon.com.mx',
            Marketplace::US => 'https://sellercentral.amazon.com',

            Marketplace::AE => 'https://sellercentral.amazon.ae',
            Marketplace::BE => 'https://sellercentral.amazon.com.be',
            Marketplace::DE => 'https://sellercentral.amazon.de',
            Marketplace::EG => 'https://sellercentral.amazon.eg',
            Marketplace::ES => 'https://sellercentral.amazon.es',
            Marketplace::FR => 'https://sellercentral.amazon.fr',
            Marketplace::GB => 'https://sellercentral.amazon.co.uk',
            Marketplace::IN => 'https://sellercentral.amazon.in',
            Marketplace::IT => 'https://sellercentral.amazon.it',
            Marketplace::NL => 'https://sellercentral.amazon.nl',
            Marketplace::PL => 'https://sellercentral.amazon.pl',
            Marketplace::SA => 'https://sellercentral.amazon.sa',
            Marketplace::SE => 'https://sellercentral.amazon.se',
            Marketplace::TR => 'https://sellercentral.amazon.com.tr',
            Marketplace::ZA => 'https://sellercentral.amazon.co.za',

            Marketplace::AU => 'https://sellercentral.amazon.com.au',
            Marketplace::JP => 'https://sellercentral.amazon.co.jp',
            Marketplace::SG => 'https://sellercentral.amazon.sg',
        };

        return $baseUrl.'/apps/authorize/consent?'.http_build_query($queryParams);
    }

    public function getRefreshToken(string $authCode): string
    {
        $this->authCode = $authCode;
        $authenticator = $this->getAccessToken();

        return $authenticator->getRefreshToken();
    }

    protected function resolveAccessTokenRequest(OAuthConfig $oauthConfig, array $scopes = [], string $scopeSeparator = ' '): Request
    {
        return new GetAccessTokenRequest($this->authCode, $oauthConfig);
    }

    protected function createOAuthAuthenticatorFromResponse(Response $response): OAuthAuthenticator
    {
        $responseData = $response->object();

        if (! isset($responseData->refresh_token)) {
            throw new OAuthException('Authorization code request response did not return a refresh token');
        }

        $expiresAt = null;

        if (isset($responseData->expires_in) && is_numeric($responseData->expires_in)) {
            $expiresAt = (new DateTimeImmutable)->add(
                DateInterval::createFromDateString((int) $responseData->expires_in.' seconds')
            );
        }

        return new AccessTokenAuthenticator($responseData->access_token, $responseData->refresh_token, $expiresAt);
    }
}
