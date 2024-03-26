<?php

namespace SellingPartnerApi\Authentication;

use SellingPartnerApi\Enums\GrantlessScope;
use SellingPartnerApi\SellingPartnerApi;

class GrantlessAuthenticator extends AbstractAuthenticator
{
    public function __construct(
        protected SellingPartnerApi $connector,
        protected GrantlessScope $scope,
    ) {
    }

    /**
     * Gets the access token for OAuth
     *
     * @return string|null Access token for OAuth
     */
    protected function getAccessToken(): ?string
    {
        $jsonData = [
            'grant_type' => 'client_credentials',
            'client_id' => $this->connector->clientId,
            'client_secret' => $this->connector->clientSecret,
            'scope' => $this->scope->value,
        ];

        $data = $this->makeTokenRequest($jsonData);

        return $data['access_token'];
    }
}
