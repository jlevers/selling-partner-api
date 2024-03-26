<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ProductPricingV0\Dto\Error;
use SellingPartnerApi\Seller\ProductPricingV0\Dto\GetOffersResult;

final class GetOffersResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?GetOffersResult  $payload
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?GetOffersResult $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
