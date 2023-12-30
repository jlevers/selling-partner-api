<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentInventoryV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SubmitInventoryUpdateRequest extends BaseDto
{
    public function __construct(
        public readonly ?InventoryUpdate $inventory = null,
    ) {
    }
}
