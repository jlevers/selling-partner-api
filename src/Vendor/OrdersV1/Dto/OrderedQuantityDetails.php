<?php

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OrderedQuantityDetails extends BaseDto
{
    /**
     * @param  ?string  $updatedDate The date when the line item quantity was updated by buyer. Must be in ISO-8601 date/time format.
     * @param  ?ItemQuantity  $orderedQuantity Details of quantity ordered.
     * @param  ?ItemQuantity  $cancelledQuantity Details of quantity ordered.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?string $updatedDate = null,
        public readonly ?ItemQuantity $orderedQuantity = null,
        public readonly ?ItemQuantity $cancelledQuantity = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
