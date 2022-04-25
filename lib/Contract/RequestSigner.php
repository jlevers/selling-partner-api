<?php

namespace SellingPartnerApi\Contract;

use GuzzleHttp\Psr7\Request;

interface RequestSigner
{
    public function signRequest(Request $request, ?string $scope = null, ?string $restrictedPath = null, ?string $operation = null): Request;
}