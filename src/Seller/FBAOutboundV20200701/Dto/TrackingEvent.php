<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TrackingEvent extends BaseDto
{
    /**
     * @param  DateTime  $eventDate
     * @param  TrackingAddress  $eventAddress  Address information for tracking the package.
     * @param  string  $eventCode  The event code for the delivery event.
     * @param  string  $eventDescription  A description for the corresponding event code.
     */
    public function __construct(
        public readonly \DateTime $eventDate,
        public readonly TrackingAddress $eventAddress,
        public readonly string $eventCode,
        public readonly string $eventDescription,
    ) {
    }
}
