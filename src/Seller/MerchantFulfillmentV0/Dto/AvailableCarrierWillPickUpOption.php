<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AvailableCarrierWillPickUpOption extends BaseDto
{
    protected static array $attributeMap = ['carrierWillPickUpOption' => 'CarrierWillPickUpOption', 'charge' => 'Charge'];

    /**
     * @param  string  $carrierWillPickUpOption  Carrier will pick up option.
     * @param  CurrencyAmount  $charge  Currency type and amount.
     */
    public function __construct(
        public readonly string $carrierWillPickUpOption,
        public readonly CurrencyAmount $charge,
    ) {
    }
}
