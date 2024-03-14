<?php

declare(strict_types=1);

namespace SellingPartnerApi;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Query;
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

    protected array $authenticatorArgs;

    public function __construct(
        public readonly string $clientId,
        protected readonly string $clientSecret,
        protected readonly string $refreshToken,
        protected readonly Endpoint $endpoint,
        protected readonly array $dataElements = [],
        protected readonly ?string $delegate = null,
        protected readonly ?ClientInterface $authenticationClient = null,
    ) {
        $authenticator = new LWAAuthenticator(
            $this->clientId,
            $this->clientSecret,
            $this->refreshToken,
            $this->endpoint,
            $this->authenticationClient
        );
        $this->authenticator = $authenticator;
    }

    public function handlePsrRequest(RequestInterface $request, PendingRequest $pendingRequest): RequestInterface
    {
        // Saloon's default query string builder (which is Guzzle) encodes arrays like key[0]=value0&key[1]=value1,
        // but Amazon expects key=value0,value1
        $query = $pendingRequest->query()->all();
        $uri = $request->getUri();
        $uri = $uri->withQuery(Query::build($query));
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
            $this->delegate,
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
            $this->delegate,
            $this->authenticationClient,
        );
    }

    public function resolveBaseUrl(): string
    {
        return $this->endpoint->value;
    }

    public function grantlessAuth(GrantlessScope $scope): GrantlessAuthenticator
    {
        return new GrantlessAuthenticator(
            $this->clientId,
            $this->clientSecret,
            $this->endpoint,
            $scope,
            $this->authenticationClient,
        );
    }

    public function restrictedAuth(
        string $path,
        string $method,
        array $knownDataElements,
    ): RestrictedDataTokenAuthenticator {
        // Only use data elements that are known to be valid for this particular endpoint
        $dataElements = array_intersect($this->dataElements, $knownDataElements);

        return new RestrictedDataTokenAuthenticator(
            $this,
            $path,
            $method,
            $dataElements,
            $this->delegate,
        );
    }

    protected function defaultAuth(): Authenticator
    {
        return $this->authenticator;
    }

    protected function defaultHeaders(): array
    {
        $version = Package::version();

        return [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'X-AMZ-Date' => gmdate('Ymd\THis\Z'),
            'User-Agent' => "jlevers/selling-partner-api/v$version/php",
            'Host' => Endpoint::host($this->endpoint),
        ];
    }
}
