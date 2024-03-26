<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class LabelSpecification extends BaseDto
{
    /**
     * @param  string  $labelFormat  The format of the label. Enum of PNG only for now.
     * @param  string  $labelStockSize  The label stock size specification in length and height. Enum of 4x6 only for now.
     */
    public function __construct(
        public readonly string $labelFormat,
        public readonly string $labelStockSize,
    ) {
    }
}
