<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class UpdateShipmentTrackingDetailsRequest extends Dto
{
    /**
     * @param  TrackingDetailsInput  $trackingDetails  Tracking information input for Less-Than-Truckload (LTL) and Small Parcel Delivery (SPD) shipments.
     */
    public function __construct(
        public readonly TrackingDetailsInput $trackingDetails,
    ) {
    }
}
