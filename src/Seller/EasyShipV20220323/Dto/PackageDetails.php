<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\EasyShipV20220323\Dto;

use SellingPartnerApi\Dto;

final class PackageDetails extends Dto
{
    protected static array $complexArrayTypes = ['packageItems' => [Item::class]];

    /**
     * @param  TimeSlot  $packageTimeSlot  A time window to hand over an Easy Ship package to Amazon Logistics.
     * @param  Item[]|null  $packageItems  A list of items contained in the package.
     * @param  ?string  $packageIdentifier  Optional seller-created identifier that is printed on the shipping label to help the seller identify the package.
     */
    public function __construct(
        public readonly TimeSlot $packageTimeSlot,
        public readonly ?array $packageItems = null,
        public readonly ?string $packageIdentifier = null,
    ) {
    }
}
