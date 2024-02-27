<?php

declare(strict_types=1);

namespace SellingPartnerApi;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Query;
use Psr\Http\Message\RequestInterface;
use Saloon\Contracts\Authenticator;
use Saloon\Http\Connector;
use Saloon\Http\PendingRequest;
use SellingPartnerApi\Authentication\GrantlessAuthenticator;
use SellingPartnerApi\Authentication\LWAAuthenticator;
use SellingPartnerApi\Enums\Endpoint;
use SellingPartnerApi\Enums\GrantlessScope;
use SellingPartnerApi\Generator\Package;
use SellingPartnerApi\Seller\SellerConnector;
use SellingPartnerApi\Vendor\VendorConnector;

class SellingPartnerApi extends Connector
{
    protected array $authenticatorArgs;

    public function __construct(
        protected readonly string $clientId,
        protected readonly string $clientSecret,
        string $refreshToken,
        protected readonly Endpoint $endpoint,
        protected readonly ?ClientInterface $authenticationClient = null,
    ) {
        $this->authenticatorArgs = [
            $this->clientId,
            $this->clientSecret,
            $refreshToken,
            $this->endpoint,
            $this->authenticationClient,
        ];
        $authenticator = new LWAAuthenticator(...$this->authenticatorArgs);
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
        return new SellerConnector(...$this->authenticatorArgs);
    }

    public function vendor(): VendorConnector
    {
        return new VendorConnector(...$this->authenticatorArgs);
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
