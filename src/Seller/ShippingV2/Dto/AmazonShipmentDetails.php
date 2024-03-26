<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AmazonShipmentDetails extends BaseDto
{
    /**
     * @param  string  $shipmentId  This attribute is required only for a Direct Fulfillment shipment. This is the encrypted shipment ID.
     */
    public function __construct(
        public readonly string $shipmentId,
    ) {
    }
}
