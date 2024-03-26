<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ValueAddedService extends BaseDto
{
    /**
     * @param  string  $id  The identifier for the value-added service.
     * @param  string  $name  The name of the value-added service.
     * @param  Currency  $cost  The monetary value in the currency indicated, in ISO 4217 standard format.
     */
    public function __construct(
        public readonly string $id,
        public readonly string $name,
        public readonly Currency $cost,
    ) {
    }
}
