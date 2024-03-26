<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ProductInfoDetail extends BaseDto
{
    protected static array $attributeMap = ['numberOfItems' => 'NumberOfItems'];

    /**
     * @param  ?int  $numberOfItems  The total number of items that are included in the ASIN.
     */
    public function __construct(
        public readonly ?int $numberOfItems = null,
    ) {
    }
}
