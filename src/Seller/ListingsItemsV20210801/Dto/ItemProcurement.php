<?php

namespace SellingPartnerApi\Seller\ListingsItemsV20210801\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemProcurement extends BaseDto
{
    /**
     * @param  Money  $money The currency type and the amount.
     */
    public function __construct(
        public readonly ?Money $money = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
