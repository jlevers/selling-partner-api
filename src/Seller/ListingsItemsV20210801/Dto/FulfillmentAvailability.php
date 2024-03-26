<?php

namespace SellingPartnerApi\Seller\ListingsItemsV20210801\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FulfillmentAvailability extends BaseDto
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
