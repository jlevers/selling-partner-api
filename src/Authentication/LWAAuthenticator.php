<?php

declare(strict_types=1);

namespace SellingPartnerApi\Authentication;

use DateTime;
use Illuminate\Support\Arr;
use SellingPartnerApi\SellingPartnerApi;

class LWAAuthenticator extends AbstractAuthenticator
{
    /**
     * A map of LWA client IDs to access tokens. Used to cache access tokens
     * for multiple clients in a single spot.
     *
     * @var array[string => AccessToken]
     */
    private static array $accessTokens = [];

    public function __construct(protected SellingPartnerApi $connector)
    {
    }

    /**
     * Gets the access token for OAuth
     */
    protected function getAccessToken(): ?string
    {
        $accessToken = Arr::get(static::$accessTokens, $this->connector->clientId);
        if (! $accessToken || $accessToken->expired()) {
            $jsonData = [
                'grant_type' => 'refresh_token',
                'client_id' => $this->connector->clientId,
                'client_secret' => $this->connector->clientSecret,
                'refresh_token' => $this->connector->refreshToken,
            ];

            $data = $this->makeTokenRequest($jsonData);

            $accessToken = new AccessToken(
                $data['access_token'],
                new DateTime("+{$data['expires_in']} seconds")
            );

            $accessToken = static::$accessTokens[$this->connector->clientId] = $accessToken;
        }

        return $accessToken->token;
    }
}
