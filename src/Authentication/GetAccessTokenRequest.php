<?php

declare(strict_types=1);

namespace SellingPartnerApi\Authentication;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Helpers\OAuth2\OAuthConfig;
use Saloon\Http\PendingRequest;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Enums\GrantlessScope;

class GetAccessTokenRequest extends Request implements HasBody
{
    use HasJsonBody;

    /**
     * Define the method that the request will use.
     */
    protected Method $method = Method::POST;

    /**
     * Requires the authorization code and OAuth 2 config.
     *
     * @param  string[]  $scopes
     */
    public function __construct(
        protected OAuthConfig $oauthConfig,
        protected string $refreshToken,
        protected ?GrantlessScope $scope = null,
    ) {
        $this->authenticate(new NullAuthenticator);
    }

    public function resolveEndpoint(): string
    {
        return $this->oauthConfig->getTokenEndpoint();
    }

    public function boot(PendingRequest $request): void
    {
        $defaultHeaders = array_keys($request->getConnector()->headers()->all());

        foreach ($defaultHeaders as $defaultHeader) {
            $request->headers()->remove($defaultHeader);
        }
    }

    /**
     * Register the default data.
     *
     * @return array{
     *     grant_type: string,
     *     client_id: string,
     *     client_secret: string,
     *     refresh_token: ?string,
     *     scope: ?string,
     * }
     */
    public function defaultBody(): array
    {
        // Only grantless operations have a scope
        // See https://developer-docs.amazon.com/sp-api/docs/connecting-to-the-selling-partner-api#step-1-request-a-login-with-amazon-access-token
        if ($this->scope) {
            $args = [
                'grant_type' => 'client_credentials',
                'scope' => $this->scope->value,
            ];
        } else {
            $args = [
                'grant_type' => 'refresh_token',
                'refresh_token' => $this->refreshToken,
            ];
        }

        return $args + [
            'client_id' => $this->oauthConfig->getClientId(),
            'client_secret' => $this->oauthConfig->getClientSecret(),
        ];
    }
}
