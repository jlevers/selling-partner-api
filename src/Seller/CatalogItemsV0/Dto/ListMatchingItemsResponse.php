<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ListMatchingItemsResponse extends BaseDto
{
    protected static array $complexArrayTypes = ['items' => [Item::class]];

    /**
     * @param  Item[]  $items A list of items.
     */
    public function __construct(
        public readonly array $items,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
