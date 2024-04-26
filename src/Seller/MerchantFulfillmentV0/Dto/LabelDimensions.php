<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use SellingPartnerApi\Dto;

final class LabelDimensions extends Dto
{
    protected static array $attributeMap = ['length' => 'Length', 'width' => 'Width', 'unit' => 'Unit'];

    /**
     * @param  float  $length  A label dimension.
     * @param  float  $width  A label dimension.
     * @param  string  $unit  The unit of length.
     */
    public function __construct(
        public readonly float $length,
        public readonly float $width,
        public readonly string $unit,
    ) {
    }
}
