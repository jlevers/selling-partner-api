<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Container extends BaseDto
{
    protected static array $complexArrayTypes = ['items' => [ContainerItem::class]];

    /**
     * @param  ContainerItem[]  $items A list of the items in the container.
     * @param  string  $containerType The type of physical container being used. (always 'PACKAGE')
     * @param  string  $containerReferenceId An identifier for the container. This must be unique within all the containers in the same shipment.
     * @param  Currency  $currency The total value of all items in the container.
     * @param  Dimensions  $dimensions A set of measurements for a three-dimensional object.
     * @param  Weight  $weight The weight.
     */
    public function __construct(
        public readonly array $items,
        public readonly ?string $containerType = null,
        public readonly ?string $containerReferenceId = null,
        public readonly ?Currency $currency = null,
        public readonly ?Dimensions $dimensions = null,
        public readonly ?Weight $weight = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
