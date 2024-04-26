<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class TransportationSelection extends Dto
{
    /**
     * @param  string  $shipmentId  Shipment ID that the transportation Option is for.
     * @param  string  $transportationOptionId  Transportation option being selected for the provided shipment.
     * @param  ?ContactInformation  $contactInformation  The seller's contact information.
     * @param  ?WindowInput  $deliveryWindow  Contains only a starting DateTime.
     */
    public function __construct(
        public readonly string $shipmentId,
        public readonly string $transportationOptionId,
        public readonly ?ContactInformation $contactInformation = null,
        public readonly ?WindowInput $deliveryWindow = null,
    ) {
    }
}
