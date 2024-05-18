<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use SellingPartnerApi\Dto;

final class PartneredSmallParcelPackageInput extends Dto
{
    protected static array $attributeMap = ['dimensions' => 'Dimensions', 'weight' => 'Weight'];

    /**
     * @param  Dimensions  $dimensions  The dimension values and unit of measurement.
     * @param  Weight  $weight  The weight of the package.
     */
    public function __construct(
        public readonly Dimensions $dimensions,
        public readonly Weight $weight,
    ) {
    }
}