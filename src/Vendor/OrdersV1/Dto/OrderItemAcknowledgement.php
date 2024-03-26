<?php

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OrderItemAcknowledgement extends BaseDto
{
    /**
     * @param  string  $acknowledgementCode  This indicates the acknowledgement code.
     * @param  ItemQuantity  $acknowledgedQuantity  Details of quantity ordered.
     * @param  ?DateTime  $scheduledShipDate  Estimated ship date per line item. Must be in ISO-8601 date/time format.
     * @param  ?DateTime  $scheduledDeliveryDate  Estimated delivery date per line item. Must be in ISO-8601 date/time format.
     * @param  ?string  $rejectionReason  Indicates the reason for rejection.
     */
    public function __construct(
        public readonly string $acknowledgementCode,
        public readonly ItemQuantity $acknowledgedQuantity,
        public readonly ?\DateTime $scheduledShipDate = null,
        public readonly ?\DateTime $scheduledDeliveryDate = null,
        public readonly ?string $rejectionReason = null,
    ) {
    }
}
