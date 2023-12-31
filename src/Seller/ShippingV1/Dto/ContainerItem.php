<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ContainerItem extends BaseDto
{
    /**
     * @param  float  $quantity The quantity of the items of this type in the container.
     * @param  string  $title A descriptive title of the item.
     * @param  Currency  $currency The total value of all items in the container.
     * @param  Weight  $weight The weight.
     */
    public function __construct(
        public readonly float $quantity,
        public readonly string $title,
        public readonly ?Currency $currency = null,
        public readonly ?Weight $weight = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
