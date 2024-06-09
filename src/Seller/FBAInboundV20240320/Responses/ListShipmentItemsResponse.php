<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\Item;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\Pagination;

final class ListShipmentItemsResponse extends Response
{
    protected static array $complexArrayTypes = ['items' => [Item::class]];

    /**
     * @param  Item[]  $items  Items contained within the box.
     * @param  ?Pagination  $pagination  Contains tokens to fetch from a certain page.
     */
    public function __construct(
        public readonly array $items,
        public readonly ?Pagination $pagination = null,
    ) {
    }
}
