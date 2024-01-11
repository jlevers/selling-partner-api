<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PartneredSmallParcelPackageInput extends BaseDto
{
    /**
     * @param  Dimensions  $dimensions The dimension values and unit of measurement.
     * @param  Weight  $weight The weight of the package.
     */
    public function __construct(
        public readonly Dimensions $dimensions,
        public readonly Weight $weight,
    ) {
    }
}
