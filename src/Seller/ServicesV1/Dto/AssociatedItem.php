<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AssociatedItem extends BaseDto
{
    /**
     * @param  ?string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     * @param  ?string  $title  The title of the item.
     * @param  ?int  $quantity  The total number of items included in the order.
     * @param  ?string  $orderId  The Amazon-defined identifier for an order placed by the buyer, in 3-7-7 format.
     * @param  ?string  $itemStatus  The status of the item.
     * @param  ?string  $brandName  The brand name of the item.
     * @param  ?ItemDelivery  $itemDelivery  Delivery information for the item.
     */
    public function __construct(
        public readonly ?string $asin = null,
        public readonly ?string $title = null,
        public readonly ?int $quantity = null,
        public readonly ?string $orderId = null,
        public readonly ?string $itemStatus = null,
        public readonly ?string $brandName = null,
        public readonly ?ItemDelivery $itemDelivery = null,
    ) {
    }
}
