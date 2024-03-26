<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ListMatchingItemsResponse extends BaseDto
{
    protected static array $attributeMap = ['items' => 'Items'];

    protected static array $complexArrayTypes = ['items' => [Item::class]];

    /**
     * @param  Item[]|null  $items  A list of items.
     */
    public function __construct(
        public readonly ?array $items = null,
    ) {
    }
}
