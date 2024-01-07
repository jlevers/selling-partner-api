<?php

namespace SellingPartnerApi\Seller\ProductFeesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PriceToEstimateFees extends BaseDto
{
    /**
     * @param  ?MoneyType  $shipping
     * @param  ?Points  $points
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly MoneyType $listingPrice,
        public readonly ?MoneyType $shipping = null,
        public readonly ?Points $points = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
