<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ShippingServiceOptions extends BaseDto
{
    protected static array $attributeMap = [
        'deliveryExperience' => 'DeliveryExperience',
        'carrierWillPickUp' => 'CarrierWillPickUp',
        'declaredValue' => 'DeclaredValue',
        'carrierWillPickUpOption' => 'CarrierWillPickUpOption',
        'labelFormat' => 'LabelFormat',
    ];

    /**
     * @param  string  $deliveryExperience  The delivery confirmation level.
     * @param  bool  $carrierWillPickUp  When true, the carrier will pick up the package.
     *
     * Note: Scheduled carrier pickup is available only using Dynamex (US), DPD (UK), and Royal Mail (UK).
     * @param  ?CurrencyAmount  $declaredValue  Currency type and amount.
     * @param  ?string  $carrierWillPickUpOption  Carrier will pick up option.
     * @param  ?string  $labelFormat  The label format.
     */
    public function __construct(
        public readonly string $deliveryExperience,
        public readonly bool $carrierWillPickUp,
        public readonly ?CurrencyAmount $declaredValue = null,
        public readonly ?string $carrierWillPickUpOption = null,
        public readonly ?string $labelFormat = null,
    ) {
    }
}
