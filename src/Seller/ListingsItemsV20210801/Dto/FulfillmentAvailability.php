<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ListingsItemsV20210801\Dto;

use SellingPartnerApi\Dto;

final class FulfillmentAvailability extends Dto
{
    /**
     * @param  string  $fulfillmentChannelCode  Designates which fulfillment network will be used.
     * @param  ?int  $quantity  The quantity of the item you are making available for sale.
     */
    public function __construct(
        public readonly string $fulfillmentChannelCode,
        public readonly ?int $quantity = null,
    ) {
    }
}
