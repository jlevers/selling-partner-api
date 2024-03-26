<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PartneredSmallParcelPackageInput extends BaseDto
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
