<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class GenerateSelfShipAppointmentSlotsRequest extends Dto
{
    /**
     * @param  ?DateTime  $desiredEndDate  The ISO 8601 datetime with pattern `yyyy-MM-ddTHH:mm:ss.sssZ`.
     * @param  ?DateTime  $desiredStartDate  The ISO 8601 datetime with pattern `yyyy-MM-ddTHH:mm:ss.sssZ`.
     */
    public function __construct(
        public readonly ?\DateTime $desiredEndDate = null,
        public readonly ?\DateTime $desiredStartDate = null,
    ) {
    }
}
