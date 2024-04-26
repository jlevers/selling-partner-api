<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use SellingPartnerApi\Dto;

final class AvailableDeliveryExperienceOption extends Dto
{
    protected static array $attributeMap = ['deliveryExperienceOption' => 'DeliveryExperienceOption', 'charge' => 'Charge'];

    /**
     * @param  string  $deliveryExperienceOption  The delivery confirmation level.
     * @param  CurrencyAmount  $charge  Currency type and amount.
     */
    public function __construct(
        public readonly string $deliveryExperienceOption,
        public readonly CurrencyAmount $charge,
    ) {
    }
}
