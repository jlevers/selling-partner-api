<?php

declare(strict_types=1);

namespace SellingPartnerApi;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Saloon\Contracts\Authenticator;
use Saloon\Http\Connector;
use Saloon\Http\PendingRequest;
use Saloon\Traits\Plugins\AlwaysThrowOnErrors;
use SellingPartnerApi\Authentication\GrantlessAuthenticator;
use SellingPartnerApi\Authentication\LWAAuthenticator;
use SellingPartnerApi\Authentication\RestrictedDataTokenAuthenticator;
use SellingPartnerApi\Enums\Endpoint;
use SellingPartnerApi\Enums\GrantlessScope;
use SellingPartnerApi\Generator\Package;
use SellingPartnerApi\Seller\SellerConnector;
use SellingPartnerApi\Vendor\VendorConnector;

class SellingPartnerApi extends Connector
{
    use AlwaysThrowOnErrors;

    public function __construct(
        public readonly string $clientId,
        public readonly string $clientSecret,
        public readonly string $refreshToken,
        public readonly Endpoint $endpoint,
        public readonly array $dataElements = [],
        public readonly ?string $delegatee = null,
        public ?ClientInterface $authenticationClient = null,
    ) {
        if (! $authenticationClient) {
            $this->authenticationClient = new Client();
        } else {
            $this->authenticationClient = $authenticationClient;
        }
    }

    public function handlePsrRequest(RequestInterface $request, PendingRequest $pendingRequest): RequestInterface
    {
        // Saloon's default query string builder (which is Guzzle) encodes arrays like key[0]=value0&key[1]=value1,
        // but Amazon expects key=value0,value1
        $query = $pendingRequest->query()->all();

        $csvQuery = [];
        foreach ($query as $key => $value) {
            if (is_array($value)) {
                $stringified = array_map(fn ($v) => urlencode((string) $v), $value);
                $csvQuery[$key] = implode(',', $stringified);
            } else {
                $csvQuery[$key] = urlencode((string) $value);
            }
        }
        $implodeableQuery = [];
        foreach ($csvQuery as $key => $value) {
            $implodeableQuery[] = "$key=$value";
        }
        $implodedQuery = implode('&', $implodeableQuery);

        $uri = $request->getUri()->withQuery($implodedQuery);
        $request = $request->withUri($uri);

        return $request;
    }

    public function seller(): SellerConnector
    {
        return new SellerConnector(
            $this->clientId,
            $this->clientSecret,
            $this->refreshToken,
            $this->endpoint,
            $this->dataElements,
            $this->delegatee,
            $this->authenticationClient,
        );
    }

    public function vendor(): VendorConnector
    {
        return new VendorConnector(
            $this->clientId,
            $this->clientSecret,
            $this->refreshToken,
            $this->endpoint,
            $this->dataElements,
            $this->delegatee,
            $this->authenticationClient,
        );
    }

    public function resolveBaseUrl(): string
    {
        return $this->endpoint->value;
    }

    public function lwaAuth(): LWAAuthenticator
    {
        return new LWAAuthenticator($this);
    }

    public function grantlessAuth(GrantlessScope $scope): GrantlessAuthenticator
    {
        return new GrantlessAuthenticator($this, $scope);
    }

    public function restrictedAuth(
        string $path,
        string $method,
        array $knownDataElements,
    ): RestrictedDataTokenAuthenticator {
        // Only use data elements that are known to be valid for this particular endpoint
        $dataElements = array_intersect($this->dataElements, $knownDataElements);

        return new RestrictedDataTokenAuthenticator($this, $path, $method, $dataElements);
    }

    public function getUserAgent(): string
    {
        $version = Package::version();

        return "jlevers/selling-partner-api/v$version/php";
    }

    protected function defaultAuth(): Authenticator
    {
        return $this->lwaAuth();
    }

    protected function defaultHeaders(): array
    {
        $version = Package::version();

        return [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'X-AMZ-Date' => gmdate('Ymd\THis\Z'),
            'User-Agent' => $this->getUserAgent(),
            'Host' => Endpoint::host($this->endpoint),
        ];
    }
}
