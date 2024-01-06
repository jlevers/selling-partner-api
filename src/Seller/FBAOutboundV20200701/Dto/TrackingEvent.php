<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TrackingEvent extends BaseDto
{
    /**
     * @param  TrackingAddress  $eventAddress Address information for tracking the package.
     * @param  string  $eventCode The event code for the delivery event.
     * @param  string  $eventDescription A description for the corresponding event code.
     */
    public function __construct(
        public readonly ?string $eventDate = null,
        public readonly ?TrackingAddress $eventAddress = null,
        public readonly ?string $eventCode = null,
        public readonly ?string $eventDescription = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
