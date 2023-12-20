<?php declare(strict_types=1);

namespace SellingPartnerApi\Saloon\Authentication;

use DateTime;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\StreamWrapper;
use GuzzleHttp\Utils;
use RuntimeException;
use Saloon\Contracts\Authenticator;
use Saloon\Http\PendingRequest;
use SellingPartnerApi\AccessToken;
use SellingPartnerApi\Enums\Endpoint;
use SellingPartnerApi\Enums\GrantlessScope;

class LWAAuthenticator implements Authenticator
{
    /**
     * Amazon's Login With Amazon (LWA) authorization endpoint.
     */
    const LWA_AUTH_URL = 'https://api.amazon.com/auth/o2/token';

    /**
     * The authentication client, if any.
     *
     * @var GuzzleHttp\ClientInterface|null
     */
    protected ClientInterface|null $authenticationClient;

    /**
     * A map of LWA client IDs to access tokens. Used to cache access tokens
     * for multiple clients in a single spot.
     *
     * @var array[string => AccessToken]
     */
    private static array $accessTokens = [];

    public function __construct(
        protected readonly string $clientId,
        protected readonly string $clientSecret,
        protected readonly string $refreshToken,
        protected readonly Endpoint $endpoint,
        ClientInterface|null $authenticationClient = null,
    ) {
        $this->authenticationClient = $authenticationClient ?? new Client();
    }

    public function set(PendingRequest $pendingRequest): void
    {
        $pendingRequest->headers()->add('X-AMZ-Access-Token', $this->getAccessToken());
    }

    /**
     * Sets the access token for OAuth
     *
     * @param AccessToken  $accessToken  Token for OAuth
     *
     * @return $this
     */
    protected function setAccessToken(AccessToken $accessToken): static
    {
        static::$accessTokens[$this->clientId] = $accessToken;
        return $this;
    }

    /**
     * Gets the access token for OAuth
     *
     * @param GrantlessScope|null  $scope  The scope of the request, if it's grantless
     * @return string|null  Access token for OAuth
     */
    protected function getAccessToken(GrantlessScope $scope = null): string|null
    {
        // We don't cache grantless access tokens, since they're used relatively rarely
        // and caching them adds complexity
        if ($scope || !array_key_exists($this->clientId, static::$accessTokens) || static::$accessTokens[$this->clientId]->expired()) {
            $jsonData = [
                'grant_type' => $scope ? 'client_credentials' : 'refresh_token',
                'client_id' => $this->clientId,
                'client_secret' => $this->clientSecret,
            ];

            // Only pass one of `scope` and `refresh_token`. For more info, see:
            // https://developer-docs.amazon.com/sp-api/docs/connecting-to-the-selling-partner-api#step-1-request-a-login-with-amazon-access-token
            if ($scope) {
                $jsonData['scope'] = $scope;
            } else {
                if ($this->refreshToken === null) {
                    throw new RuntimeException('Refresh token is required unless calling a grantless API endpoint.');
                }
                $jsonData['refresh_token'] = $this->refreshToken;
            }

            $lwaTokenRequest = new Request(
                'POST',
                static::LWA_AUTH_URL,
                [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ],
                Utils::jsonEncode($jsonData)
            );
            $res = $this->authenticationClient->send($lwaTokenRequest);

            $body = stream_get_contents(StreamWrapper::getResource($res->getBody()));
            $data = json_decode($body, true);
            $accessToken = new AccessToken(
                $data['access_token'],
                new DateTime("+{$data['expires_in']} seconds")
            );

            if ($scope) {
                // As mentioned above, we don't cache grantless access tokens
                return $accessToken;
            }

            static::$accessTokens[$this->clientId] = $accessToken;
        }

        return static::$accessTokens[$this->clientId]->token;
    }
}
