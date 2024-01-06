<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class LabelDimensions extends BaseDto
{
    /**
     * @param  float  $length A label dimension.
     * @param  float  $width A label dimension.
     * @param  string  $unit The unit of length.
     */
    public function __construct(
        public readonly float $length,
        public readonly float $width,
        public readonly string $unit,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
