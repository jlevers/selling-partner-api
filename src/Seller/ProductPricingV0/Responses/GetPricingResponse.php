<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ProductPricingV0\Dto\Error;
use SellingPartnerApi\Seller\ProductPricingV0\Dto\Price;

final class GetPricingResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['payload' => [Price::class], 'errors' => [Error::class]];

    /**
     * @param  Price[]|null  $payload
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?array $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
