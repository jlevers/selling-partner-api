<?php

declare(strict_types=1);

namespace SellingPartnerApi\Middleware;

use Saloon\Contracts\RequestMiddleware;
use Saloon\Http\PendingRequest;

class RestrictedDataToken implements RequestMiddleware
{
    public function __construct(
        protected string $path,
        protected string $method,
        protected array $knownDataElements,
    ) {
    }

    public function __invoke(PendingRequest $pendingRequest)
    {
        $connector = $pendingRequest->getConnector();
        $pendingRequest->authenticate($connector->restrictedAuth(
            $this->path,
            $this->method,
            $this->knownDataElements
        ));
    }
}
