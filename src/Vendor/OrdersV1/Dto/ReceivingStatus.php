<?php

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ReceivingStatus extends BaseDto
{
    /**
     * @param  ?string  $receiveStatus Receive status of the line item.
     * @param  ?ItemQuantity  $receivedQuantity Details of quantity ordered.
     * @param  ?string  $lastReceiveDate The date when the most recent item was received at the buyer's warehouse. Must be in ISO-8601 date/time format.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?string $receiveStatus = null,
        public readonly ?ItemQuantity $receivedQuantity = null,
        public readonly ?string $lastReceiveDate = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
