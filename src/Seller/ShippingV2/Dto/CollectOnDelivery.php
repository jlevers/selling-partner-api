<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CollectOnDelivery extends BaseDto
{
    /**
     * @param  Currency  $amount  The monetary value in the currency indicated, in ISO 4217 standard format.
     */
    public function __construct(
        public readonly Currency $amount,
    ) {
    }
}
