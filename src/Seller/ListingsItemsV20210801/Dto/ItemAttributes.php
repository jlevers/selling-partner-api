<?php

namespace SellingPartnerApi\Seller\ListingsItemsV20210801\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemAttributes extends BaseDto
{
    public function __construct(mixed ...$additionalProperties)
    {
        parent::__construct(...$additionalProperties);
    }
}
