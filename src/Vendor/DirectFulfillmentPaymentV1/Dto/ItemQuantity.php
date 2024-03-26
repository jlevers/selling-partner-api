<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentPaymentV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemQuantity extends BaseDto
{
    /**
     * @param  int  $amount  Quantity of units available for a specific item.
     * @param  string  $unitOfMeasure  Unit of measure for the available quantity.
     */
    public function __construct(
        public readonly int $amount,
        public readonly string $unitOfMeasure,
    ) {
    }
}
