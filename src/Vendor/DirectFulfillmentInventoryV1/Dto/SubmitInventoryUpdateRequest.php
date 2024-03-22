<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentInventoryV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SubmitInventoryUpdateRequest extends BaseDto
{
    /**
     * @param  ?InventoryUpdate  $inventory
     */
    public function __construct(
        public readonly ?InventoryUpdate $inventory = null,
    ) {
    }
}
