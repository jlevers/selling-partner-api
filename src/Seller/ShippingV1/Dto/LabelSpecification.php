<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use SellingPartnerApi\Dto;

final class LabelSpecification extends Dto
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
