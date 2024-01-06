<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ShippingOfferingFilter extends BaseDto
{
    /**
     * @param  bool  $includePackingSlipWithLabel When true, include a packing slip with the label.
     * @param  bool  $includeComplexShippingOptions When true, include complex shipping options.
     * @param  string  $carrierWillPickUp Carrier will pick up option.
     * @param  string  $deliveryExperience The delivery confirmation level.
     */
    public function __construct(
        public readonly bool $includePackingSlipWithLabel,
        public readonly bool $includeComplexShippingOptions,
        public readonly string $carrierWillPickUp,
        public readonly string $deliveryExperience,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
