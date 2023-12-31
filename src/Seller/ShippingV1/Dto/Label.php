<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Label extends BaseDto
{
    /**
     * @param  string  $labelStream Contains binary image data encoded as a base-64 string.
     * @param  LabelSpecification  $labelSpecification The label specification info.
     */
    public function __construct(
        public readonly string $labelStream,
        public readonly LabelSpecification $labelSpecification,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
