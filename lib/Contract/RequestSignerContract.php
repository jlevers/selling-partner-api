<?php

namespace SellingPartnerApi\Contract;

use Psr\Http\Message\RequestInterface;

interface RequestSignerContract
{
    public function signRequest(
        RequestInterface $request,
        ?string $scope = null,
        ?string $restrictedPath = null,
        ?string $operation = null
    ): RequestInterface;
}