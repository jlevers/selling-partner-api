<?php

declare(strict_types=1);

namespace SellingPartnerApi\Authentication;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\StreamWrapper;
use GuzzleHttp\Utils;
use Psr\Http\Client\ClientInterface;
use Saloon\Contracts\Authenticator;
use Saloon\Http\PendingRequest;

abstract class AbstractAuthenticator implements Authenticator
{
    /**
     * Amazon's Login With Amazon (LWA) authorization endpoint.
     */
    const LWA_AUTH_URL = 'https://api.amazon.com/auth/o2/token';

    /**
     * The authentication client, if any.
     *
     * @var Psr\Http\Client\ClientInterface|null
     */
    protected ?ClientInterface $authenticationClient;

    /**
     * Get the OAuth access token
     */
    abstract protected function getAccessToken(): ?string;

    public function set(PendingRequest $pendingRequest): void
    {
        $pendingRequest->headers()->add('X-AMZ-Access-Token', $this->getAccessToken());
    }

    protected function makeTokenRequest(array $jsonData): array
    {
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

        return json_decode($body, true);
    }
}
