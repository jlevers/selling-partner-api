<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class TransportationOption extends Dto
{
    /**
     * @param  Carrier  $carrier  The carrier for the inbound shipment.
     * @param  string  $inboundPlanId  Identifier to an inbound plan.
     * @param  string  $placementOptionId  The identifier of a placement option. A placement option represents the shipment splits and destinations of SKUs.
     * @param  string  $shipmentId  Identifier to a shipment. A shipment contains the boxes and units being inbounded.
     * @param  string  $shippingMode  The shipping mode associated with the transportation option. Available modes are ground small parcel, freight less-than-truckload (LTL), freight full-truckload (FTL) palletized, freight FTL non-palletized, ocean less-than-container-load (LCL), ocean full-container load (FCL), air small parcel, and air small parcel express.
     * @param  string  $shippingSolution  The shipping solution associated with the transportation option. Available solutions are Amazon-partnered carrier or 'use your own carrier'.
     * @param  string  $transportationOptionId  Identifier to a transportation option. A transportation option represent one option for how to send a shipment.
     * @param  ?AppointmentSlot  $appointmentSlot  The fulfillment center appointment slot for the transportation option.
     * @param  ?Quote  $quote  The estimated shipping cost associated with the transportation option.
     */
    public function __construct(
        public readonly Carrier $carrier,
        public readonly string $inboundPlanId,
        public readonly string $placementOptionId,
        public readonly string $shipmentId,
        public readonly string $shippingMode,
        public readonly string $shippingSolution,
        public readonly string $transportationOptionId,
        public readonly ?AppointmentSlot $appointmentSlot = null,
        public readonly ?Quote $quote = null,
    ) {
    }
}
