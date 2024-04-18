<?php

namespace SellingPartnerApi\Contract;

use DateTime;
use Psr\Http\Message\RequestInterface;
use SellingPartnerApi\Credentials;

interface AuthorizationSignerContract
{
    public function sign(RequestInterface $request, Credentials $credentials): RequestInterface;

    public function setRequestTime(?DateTime $datetime = null): void;

    public function formattedRequestTime(?bool $withTime = true): ?string;
}