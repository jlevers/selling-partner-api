<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use SellingPartnerApi\Dto;

final class ItemQuantity extends Dto
{
    /**
     * @param  int  $amount  Amount of units shipped for a specific item at a shipment level. If the item is present only in certain cartons or pallets within the shipment, please provide this at the appropriate carton or pallet level.
     * @param  string  $unitOfMeasure  Unit of measure for the shipped quantity.
     * @param  ?int  $unitSize  The case size, in the event that we ordered using cases. Otherwise, 1.
     * @param  ?TotalWeight  $totalWeight  The total weight of units that are sold by weight in a shipment.
     */
    public function __construct(
        public int $amount,
        public string $unitOfMeasure,
        public ?int $unitSize = null,
        public ?TotalWeight $totalWeight = null,
    ) {}
}
