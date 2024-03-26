<?php

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OutboundCapability extends BaseDto
{
    /**
     * @param  ?bool  $isSupported
     * @param  ?OperationalConfiguration  $operationalConfiguration  The operational configuration of `supplySources`.
     * @param  ?ReturnLocation  $returnLocation  The address or reference to another `supplySourceId` to act as a return location.
     * @param  ?DeliveryChannel  $deliveryChannel  The delivery channel of a supply source.
     * @param  ?PickupChannel  $pickupChannel  The pick up channel of a supply source.
     */
    public function __construct(
        public readonly ?bool $isSupported = null,
        public readonly ?OperationalConfiguration $operationalConfiguration = null,
        public readonly ?ReturnLocation $returnLocation = null,
        public readonly ?DeliveryChannel $deliveryChannel = null,
        public readonly ?PickupChannel $pickupChannel = null,
    ) {
    }
}
