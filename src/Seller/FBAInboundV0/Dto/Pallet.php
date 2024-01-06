<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Pallet extends BaseDto
{
    /**
     * @param  Dimensions  $dimensions The dimension values and unit of measurement.
     * @param  Weight  $weight The weight of the package.
     * @param  bool  $isStacked Indicates whether pallets will be stacked when carrier arrives for pick-up.
     */
    public function __construct(
        public readonly ?Dimensions $dimensions = null,
        public readonly ?Weight $weight = null,
        public readonly ?bool $isStacked = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
