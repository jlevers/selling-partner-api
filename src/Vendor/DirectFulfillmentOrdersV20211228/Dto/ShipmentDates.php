<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ShipmentDates extends BaseDto
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
