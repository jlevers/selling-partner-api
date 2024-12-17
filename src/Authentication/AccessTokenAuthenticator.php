<?php

declare(strict_types=1);

namespace SellingPartnerApi\Authentication;

use Saloon\Http\Auth\AccessTokenAuthenticator as SaloonAccessTokenAuthenticator;
use Saloon\Http\PendingRequest;

class AccessTokenAuthenticator extends SaloonAccessTokenAuthenticator
{
    public function set(PendingRequest $pendingRequest): void
    {
        $pendingRequest->headers()->add('X-AMZ-Access-Token', $this->getAccessToken());
    }
}
