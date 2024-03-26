<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Pallet extends BaseDto
{
    protected static array $attributeMap = ['dimensions' => 'Dimensions', 'isStacked' => 'IsStacked', 'weight' => 'Weight'];

    /**
     * @param  Dimensions  $dimensions  The dimension values and unit of measurement.
     * @param  bool  $isStacked  Indicates whether pallets will be stacked when carrier arrives for pick-up.
     * @param  ?Weight  $weight  The weight of the package.
     */
    public function __construct(
        public readonly Dimensions $dimensions,
        public readonly bool $isStacked,
        public readonly ?Weight $weight = null,
    ) {
    }
}
