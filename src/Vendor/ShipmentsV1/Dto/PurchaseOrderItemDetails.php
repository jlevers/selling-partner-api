<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PurchaseOrderItemDetails extends BaseDto
{
    /**
     * @param  ?Money  $maximumRetailPrice  An amount of money, including units in the form of currency.
     */
    public function __construct(
        public readonly ?Money $maximumRetailPrice = null,
    ) {
    }
}
