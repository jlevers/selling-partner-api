<?php

namespace SellingPartnerApi\Middleware;

use Saloon\Contracts\RequestMiddleware;
use Saloon\Http\PendingRequest;
use SellingPartnerApi\Enums\GrantlessScope;

class Grantless implements RequestMiddleware
{
    public function __construct(protected GrantlessScope $scope) {}

    public function __invoke(PendingRequest $pendingRequest)
    {
        $connector = $pendingRequest->getConnector();
        $pendingRequest->authenticate($connector->grantlessAuth($this->scope));
    }
}
