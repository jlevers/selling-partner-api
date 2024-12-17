<?php

declare(strict_types=1);

namespace SellingPartnerApi\Authentication;

use Saloon\Contracts\Authenticator;
use Saloon\Http\PendingRequest;

class NullAuthenticator implements Authenticator
{
    public function set(PendingRequest $pendingRequest): void
    {
        //
    }
}
