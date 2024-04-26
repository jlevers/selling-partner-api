<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use SellingPartnerApi\Dto;

final class ItemDelivery extends Dto
{
    /**
     * @param  ?DateTime  $estimatedDeliveryDate  The date and time of the latest Estimated Delivery Date (EDD) of all the items with an EDD. In ISO 8601 format.
     * @param  ?ItemDeliveryPromise  $itemDeliveryPromise  Promised delivery information for the item.
     */
    public function __construct(
        public readonly ?\DateTime $estimatedDeliveryDate = null,
        public readonly ?ItemDeliveryPromise $itemDeliveryPromise = null,
    ) {
    }
}
