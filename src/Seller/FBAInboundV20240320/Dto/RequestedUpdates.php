<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class RequestedUpdates extends Dto
{
    protected static array $complexArrayTypes = ['boxes' => [BoxUpdateInput::class], 'items' => [Item::class]];

    /**
     * @param  BoxUpdateInput[]|null  $boxes  A list of boxes that will be present in the shipment after the update.
     * @param  Item[]|null  $items  Items contained within the box.
     */
    public function __construct(
        public readonly ?array $boxes = null,
        public readonly ?array $items = null,
    ) {
    }
}
