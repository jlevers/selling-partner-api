<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ChargeComponent extends BaseDto
{
    /**
     * @param  ?Currency  $amount  The monetary value in the currency indicated, in ISO 4217 standard format.
     * @param  ?string  $chargeType  The type of charge.
     */
    public function __construct(
        public readonly ?Currency $amount = null,
        public readonly ?string $chargeType = null,
    ) {
    }
}
