<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ShipmentDates extends BaseDto
{
    /**
     * @param  string  $requiredShipDate Time by which the vendor is required to ship the order.
     * @param  ?string  $promisedDeliveryDate Delivery date promised to the Amazon customer.
     */
    public function __construct(
        public readonly string $requiredShipDate,
        public readonly ?string $promisedDeliveryDate = null,
    ) {
    }
}
