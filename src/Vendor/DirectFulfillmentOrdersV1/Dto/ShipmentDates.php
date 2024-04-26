<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Dto;

use SellingPartnerApi\Dto;

final class ShipmentDates extends Dto
{
    /**
     * @param  DateTime  $requiredShipDate  Time by which the vendor is required to ship the order.
     * @param  ?DateTime  $promisedDeliveryDate  Delivery date promised to the Amazon customer.
     */
    public function __construct(
        public readonly \DateTime $requiredShipDate,
        public readonly ?\DateTime $promisedDeliveryDate = null,
    ) {
    }
}
