<?php

namespace SellingPartnerApi\Contract;

use GuzzleHttp\Psr7\Request;
use SellingPartnerApi\Credentials;

interface AuthorizationSignerContract
{
    public function sign(Request $request, Credentials $credentials): Request;

    public function setRequestTime(?\DateTime $datetime = null): void;

    public function formattedRequestTime(?bool $withTime = true): ?string;
}