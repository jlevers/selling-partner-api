<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use SellingPartnerApi\Dto;

final class TrackingEvent extends Dto
{
    /**
     * @param  TrackingAddress  $eventAddress  Address information for tracking the package.
     * @param  string  $eventCode  The event code for the delivery event.
     * @param  string  $eventDescription  A description for the corresponding event code.
     */
    public function __construct(
        public readonly \DateTimeInterface $eventDate,
        public readonly TrackingAddress $eventAddress,
        public readonly string $eventCode,
        public readonly string $eventDescription,
    ) {
    }
}
