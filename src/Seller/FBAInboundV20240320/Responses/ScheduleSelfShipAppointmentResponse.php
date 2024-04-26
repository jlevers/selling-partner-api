<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\SelfShipAppointmentDetails;

final class ScheduleSelfShipAppointmentResponse extends Response
{
    /**
     * @param  SelfShipAppointmentDetails  $selfShipAppointmentDetails  Appointment details for carrier pickup or fulfillment center appointments.
     */
    public function __construct(
        public readonly SelfShipAppointmentDetails $selfShipAppointmentDetails,
    ) {
    }
}
