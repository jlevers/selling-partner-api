<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetPreorderInfoResult extends BaseDto
{
    /**
     * @param  ?bool  $shipmentContainsPreorderableItems Indicates whether the shipment contains items that have been enabled for pre-order. For more information about enabling items for pre-order, see the Seller Central Help.
     * @param  ?bool  $shipmentConfirmedForPreorder Indicates whether this shipment has been confirmed for pre-order.
     * @param  ?string  $needByDate
     * @param  ?string  $confirmedFulfillableDate
     */
    public function __construct(
        public readonly ?bool $shipmentContainsPreorderableItems = null,
        public readonly ?bool $shipmentConfirmedForPreorder = null,
        public readonly ?string $needByDate = null,
        public readonly ?string $confirmedFulfillableDate = null,
    ) {
    }
}
