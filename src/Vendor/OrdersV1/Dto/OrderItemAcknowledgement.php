<?php

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OrderItemAcknowledgement extends BaseDto
{
    /**
     * @param  string  $acknowledgementCode This indicates the acknowledgement code.
     * @param  ItemQuantity  $acknowledgedQuantity Details of quantity ordered.
     * @param  ?string  $scheduledShipDate Estimated ship date per line item. Must be in ISO-8601 date/time format.
     * @param  ?string  $scheduledDeliveryDate Estimated delivery date per line item. Must be in ISO-8601 date/time format.
     * @param  ?string  $rejectionReason Indicates the reason for rejection.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly string $acknowledgementCode,
        public readonly ItemQuantity $acknowledgedQuantity,
        public readonly ?string $scheduledShipDate = null,
        public readonly ?string $scheduledDeliveryDate = null,
        public readonly ?string $rejectionReason = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
