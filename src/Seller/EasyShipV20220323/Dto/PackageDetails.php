<?php

namespace SellingPartnerApi\Seller\EasyShipV20220323\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PackageDetails extends BaseDto
{
    protected static array $complexArrayTypes = ['packageItems' => [Item::class]];

    /**
     * @param  Item[]  $packageItems A list of items contained in the package.
     * @param  TimeSlot  $packageTimeSlot A time window to hand over an Easy Ship package to Amazon Logistics.
     * @param  string  $packageIdentifier Optional seller-created identifier that is printed on the shipping label to help the seller identify the package.
     */
    public function __construct(
        public readonly ?array $packageItems,
        public readonly TimeSlot $packageTimeSlot,
        public readonly ?string $packageIdentifier = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
