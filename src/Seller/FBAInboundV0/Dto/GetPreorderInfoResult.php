<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetPreorderInfoResult extends BaseDto
{
    /**
     * @param  bool  $shipmentContainsPreorderableItems Indicates whether the shipment contains items that have been enabled for pre-order. For more information about enabling items for pre-order, see the Seller Central Help.
     * @param  bool  $shipmentConfirmedForPreorder Indicates whether this shipment has been confirmed for pre-order.
     */
    public function __construct(
        public readonly bool $shipmentContainsPreorderableItems,
        public readonly bool $shipmentConfirmedForPreorder,
        public readonly string $needByDate,
        public readonly string $confirmedFulfillableDate,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
