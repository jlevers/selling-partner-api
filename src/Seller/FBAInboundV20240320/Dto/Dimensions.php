<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class Dimensions extends Dto
{
    /**
     * @param  float  $height  Height.
     * @param  float  $length  Length.
     * @param  string  $unitOfMeasurement  Unit of linear measure.
     * @param  float  $width  Width.
     */
    public function __construct(
        public readonly float $height,
        public readonly float $length,
        public readonly string $unitOfMeasurement,
        public readonly float $width,
    ) {
    }
}
