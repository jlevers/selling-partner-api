<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductFeesV0\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\ProductFeesV0\Dto\Error;

final class GetMyFeesEstimatesErrorList extends Response
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  Error[]  $errors
     */
    public function __construct(
        public readonly array $errors,
    ) {
    }
}
