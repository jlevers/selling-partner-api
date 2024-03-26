<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FulfillmentShipmentPackage extends BaseDto
{
    /**
     * @param  int  $packageNumber  Identifies a package in a shipment.
     * @param  string  $carrierCode  Identifies the carrier who will deliver the shipment to the recipient.
     * @param  ?string  $trackingNumber  The tracking number, if provided, can be used to obtain tracking and delivery information.
     * @param  ?DateTime  $estimatedArrivalDate
     */
    public function __construct(
        public readonly int $packageNumber,
        public readonly string $carrierCode,
        public readonly ?string $trackingNumber = null,
        public readonly ?\DateTime $estimatedArrivalDate = null,
    ) {
    }
}
