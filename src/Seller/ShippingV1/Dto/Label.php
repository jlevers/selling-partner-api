<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use SellingPartnerApi\Dto;

final class Label extends Dto
{
    /**
     * @param  ?string  $labelStream  Contains binary image data encoded as a base-64 string.
     * @param  ?LabelSpecification  $labelSpecification  The label specification info.
     */
    public function __construct(
        public readonly ?string $labelStream = null,
        public readonly ?LabelSpecification $labelSpecification = null,
    ) {
    }
}
