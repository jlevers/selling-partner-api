<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentInventoryV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemQuantity extends BaseDto
{
    /**
     * @param  string  $unitOfMeasure  Unit of measure for the available quantity.
     * @param  ?int  $amount  Quantity of units available for a specific item.
     */
    public function __construct(
        public readonly string $unitOfMeasure,
        public readonly ?int $amount = null,
    ) {
    }
}
