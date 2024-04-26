<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class SpdTrackingDetailInput extends Dto
{
    protected static array $complexArrayTypes = ['spdTrackingItems' => [SpdTrackingItem::class]];

    /**
     * @param  SpdTrackingItem[]  $spdTrackingItems  List of Small Parcel Delivery (SPD) tracking items.
     */
    public function __construct(
        public readonly array $spdTrackingItems,
    ) {
    }
}
