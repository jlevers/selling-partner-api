<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemQuantity extends BaseDto
{
    /**
     * @param  int  $amount  Amount of units shipped for a specific item at a shipment level. If the item is present only in certain cartons or pallets within the shipment, please provide this at the appropriate carton or pallet level.
     * @param  string  $unitOfMeasure  Unit of measure for the shipped quantity.
     * @param  ?int  $unitSize  The case size, in the event that we ordered using cases. Otherwise, 1.
     */
    public function __construct(
        public readonly int $amount,
        public readonly string $unitOfMeasure,
        public readonly ?int $unitSize = null,
    ) {
    }
}
