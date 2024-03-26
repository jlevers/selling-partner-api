<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Container extends BaseDto
{
    protected static array $complexArrayTypes = ['items' => [ContainerItem::class]];

    /**
     * @param  string  $containerReferenceId  An identifier for the container. This must be unique within all the containers in the same shipment.
     * @param  Currency  $value  The total value of all items in the container.
     * @param  Dimensions  $dimensions  A set of measurements for a three-dimensional object.
     * @param  ContainerItem[]  $items  A list of the items in the container.
     * @param  Weight  $weight  The weight.
     * @param  ?string  $containerType  The type of physical container being used. (always 'PACKAGE')
     */
    public function __construct(
        public readonly string $containerReferenceId,
        public readonly Currency $value,
        public readonly Dimensions $dimensions,
        public readonly array $items,
        public readonly Weight $weight,
        public readonly ?string $containerType = null,
    ) {
    }
}
