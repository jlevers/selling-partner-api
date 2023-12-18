<?php declare(strict_types=1);

namespace SellingPartnerApi\Authentication;

use Saloon\Contracts\Authenticator as AuthenticatorContract;
use Saloon\Http\PendingRequest;

class RestrictedDataTokenAuthenticator extends AuthenticatorContract
{
    public function set(PendingRequest $pendingRequest): void
    {
        // ...
    }
}
