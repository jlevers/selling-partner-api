<?php declare(strict_types=1);

namespace SellingPartnerApi\Connectors;

use Saloon\Contracts\Authenticator;
use Saloon\Http\Connector;
use SellingPartnerApi\Enums\Endpoint;
use SellingPartnerApi\Saloon\Authentication\LWAAuthenticator;

abstract class BaseConnector extends Connector
{
    public function __construct(
        protected readonly Endpoint $endpoint,
        ...$args
    ) {
        $authenticator = new LWAAuthenticator(
            ...$args,
            endpoint: $this->endpoint,
        );
        $this->authenticator = $authenticator;
    }

    public function resolveBaseUrl(): string
    {
        return $this->endpoint->value;
    }

    protected function defaultAuth(): Authenticator
    {
        return $this->authenticator;
    }

    protected function defaultHeaders(): array
    {
        return [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'X-AMZ-Date' => gmdate('Ymd\THis\Z'),
            'User-Agent' => 'jlevers/selling-partner-api/v1.0.0/php',
            'Host' => Endpoint::host($this->endpoint),
        ];
    }
}
