<?php

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AcknowledgementStatus extends BaseDto
{
    protected static array $complexArrayTypes = ['acknowledgementStatusDetails' => [AcknowledgementStatusDetails::class]];

    /**
     * @param  ?string  $confirmationStatus  Confirmation status of line item.
     * @param  ?ItemQuantity  $acceptedQuantity  Details of quantity ordered.
     * @param  ?ItemQuantity  $rejectedQuantity  Details of quantity ordered.
     * @param  AcknowledgementStatusDetails[]  $acknowledgementStatusDetails  Details of item quantity confirmed.
     */
    public function __construct(
        public readonly ?string $confirmationStatus = null,
        public readonly ?ItemQuantity $acceptedQuantity = null,
        public readonly ?ItemQuantity $rejectedQuantity = null,
        public readonly ?array $acknowledgementStatusDetails = null,
    ) {
    }
}
