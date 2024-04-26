<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use SellingPartnerApi\Dto;

final class ProductInfoDetail extends Dto
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
