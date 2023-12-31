<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CollectOnDelivery extends BaseDto
{
    /**
     * @param  Currency  $currency The monetary value in the currency indicated, in ISO 4217 standard format.
     */
    public function __construct(
        public readonly ?Currency $currency = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
