<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemQuantity extends BaseDto
{
    /**
     * @param  ?int  $amount  Acknowledged quantity. This value should not be zero.
     * @param  ?string  $unitOfMeasure  Unit of measure for the acknowledged quantity.
     */
    public function __construct(
        public readonly ?int $amount = null,
        public readonly ?string $unitOfMeasure = null,
    ) {
    }
}
