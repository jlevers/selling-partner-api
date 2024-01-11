<?php

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AcknowledgementStatusDetails extends BaseDto
{
    /**
     * @param  ?string  $acknowledgementDate The date when the line item was confirmed by vendor. Must be in ISO-8601 date/time format.
     * @param  ?ItemQuantity  $acceptedQuantity Details of quantity ordered.
     * @param  ?ItemQuantity  $rejectedQuantity Details of quantity ordered.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?string $acknowledgementDate = null,
        public readonly ?ItemQuantity $acceptedQuantity = null,
        public readonly ?ItemQuantity $rejectedQuantity = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
