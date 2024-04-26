<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductFeesV0\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\ProductFeesV0\Dto\Error;
use SellingPartnerApi\Seller\ProductFeesV0\Dto\GetMyFeesEstimateResult;

final class GetMyFeesEstimateResponse extends Response
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?GetMyFeesEstimateResult  $payload  Response schema.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?GetMyFeesEstimateResult $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
