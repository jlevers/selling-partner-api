<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class Dimensions extends Dto
{
    /**
     * @param  float  $height  The height of a package.
     * @param  float  $length  The length of a package.
     * @param  string  $unitOfMeasurement  Unit of linear measure.
     * @param  float  $width  The width of a package.
     */
    public function __construct(
        public readonly float $height,
        public readonly float $length,
        public readonly string $unitOfMeasurement,
        public readonly float $width,
    ) {
    }
}
