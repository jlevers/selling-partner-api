<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class TrackingDetails extends Dto
{
    /**
     * @param  ?LtlTrackingDetail  $ltlTrackingDetail  Contains information related to Less-Than-Truckload (LTL) shipment tracking.
     * @param  ?SpdTrackingDetail  $spdTrackingDetail  Contains information related to Small Parcel Delivery (SPD) shipment tracking.
     */
    public function __construct(
        public readonly ?LtlTrackingDetail $ltlTrackingDetail = null,
        public readonly ?SpdTrackingDetail $spdTrackingDetail = null,
    ) {
    }
}
