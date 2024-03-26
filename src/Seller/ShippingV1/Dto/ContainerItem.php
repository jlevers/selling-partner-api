<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ContainerItem extends BaseDto
{
    /**
     * @param  float  $quantity  The quantity of the items of this type in the container.
     * @param  Currency  $unitPrice  The total value of all items in the container.
     * @param  Weight  $unitWeight  The weight.
     * @param  string  $title  A descriptive title of the item.
     */
    public function __construct(
        public readonly float $quantity,
        public readonly Currency $unitPrice,
        public readonly Weight $unitWeight,
        public readonly string $title,
    ) {
    }
}
