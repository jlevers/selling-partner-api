<?php

namespace SellingPartnerApi\Authentication;

use GuzzleHttp\Client;
use Psr\Http\Client\ClientInterface;
use SellingPartnerApi\Enums\Endpoint;
use SellingPartnerApi\Enums\GrantlessScope;

class GrantlessAuthenticator extends AbstractAuthenticator
{
    public function __construct(
        protected readonly string $clientId,
        protected readonly string $clientSecret,
        protected readonly Endpoint $endpoint,
        protected readonly ?GrantlessScope $scope,
        ?ClientInterface $authenticationClient = null,
    ) {
        $this->authenticationClient = $authenticationClient ?? new Client();
    }

    /**
     * Gets the access token for OAuth
     *
     * @return string|null  Access token for OAuth
     */
    protected function getAccessToken(): ?string
    {
        $jsonData = [
            'grant_type' => 'client_credentials',
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
            'scope' => $this->scope->value,
        ];

        $data = $this->makeTokenRequest($jsonData);

        return $data['access_token'];
    }
}
