<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ContainerSpecification extends BaseDto
{
    /**
     * @param  Dimensions  $dimensions  A set of measurements for a three-dimensional object.
     * @param  Weight  $weight  The weight.
     */
    public function __construct(
        public readonly Dimensions $dimensions,
        public readonly Weight $weight,
    ) {
    }
}
