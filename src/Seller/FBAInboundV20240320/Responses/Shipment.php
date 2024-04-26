<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\ContactInformation;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\Dates;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\PalletInformation;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\SelfShipAppointmentDetails;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\ShipmentDestination;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\ShipmentSource;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\TrackingDetails;

final class Shipment extends Response
{
    protected static array $complexArrayTypes = ['selfShipAppointmentDetails' => [SelfShipAppointmentDetails::class]];

    /**
     * @param  ShipmentDestination  $destination  The Amazon fulfillment center address and warehouse ID.
     * @param  string  $inboundPlanId  Identifier to an inbound plan.
     * @param  string  $placementOptionId  Identifier to a placement option. A placement option represents the shipment splits and destinations of SKUs.
     * @param  string  $shipmentId  Identifier to a shipment. A shipment contains the boxes and units being inbounded.
     * @param  ShipmentSource  $source  Specifies the 'ship from' address for the shipment.
     * @param  ?string  $amazonReferenceId  A unique identifier created by Amazon that identifies this Amazon-partnered, Less Than Truckload/Full Truckload (LTL/FTL) shipment.
     * @param  ?ContactInformation  $contactInformation  The seller's contact information.
     * @param  ?Dates  $dates  Specifies the dates that the seller expects their shipment will be shipped and delivered.
     * @param  ?string  $name  The name of the shipment.
     * @param  ?PalletInformation  $palletInformation  Pallet information, including weight, dimensions, quantity, stackability, freight class, and declared value.
     * @param  ?string  $selectedTransportationOptionId  Identifier to a transportation option. A transportation option represent one option for how to send a shipment.
     * @param  SelfShipAppointmentDetails[]|null  $selfShipAppointmentDetails  List of self ship appointment details.
     * @param  ?string  $shipmentConfirmationId  The confirmed shipment ID which shows up on labels (for example, FBA1234ABCD).
     * @param  ?string  $status  The status of a shipment. The state of the shipment will typically start in `WORKING` and transition to `READY_TO_SHIP` once required actions are complete prior to being picked up or shipped out. Can be `ABANDONED`, `CANCELLED`, `CHECKED_IN`, `CLOSED`, `DELETED`, `DELIVERED`, `IN_TRANSIT`, `MIXED`, `READY_TO_SHIP`, `RECEIVING`, `SHIPPED`, or `WORKING`.
     * @param  ?TrackingDetails  $trackingDetails  Tracking information for Less-Than-Truckload (LTL) and Small Parcel Delivery (SPD) shipments.
     */
    public function __construct(
        public readonly ShipmentDestination $destination,
        public readonly string $inboundPlanId,
        public readonly string $placementOptionId,
        public readonly string $shipmentId,
        public readonly ShipmentSource $source,
        public readonly ?string $amazonReferenceId = null,
        public readonly ?ContactInformation $contactInformation = null,
        public readonly ?Dates $dates = null,
        public readonly ?string $name = null,
        public readonly ?PalletInformation $palletInformation = null,
        public readonly ?string $selectedTransportationOptionId = null,
        public readonly ?array $selfShipAppointmentDetails = null,
        public readonly ?string $shipmentConfirmationId = null,
        public readonly ?string $status = null,
        public readonly ?TrackingDetails $trackingDetails = null,
    ) {
    }
}
