<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\ProductPricingV20220501\Dto\Error;

final class Errors extends Response
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  Error[]  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly array $errors,
    ) {
    }
}
