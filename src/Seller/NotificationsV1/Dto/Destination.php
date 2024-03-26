<?php

namespace SellingPartnerApi\Seller\NotificationsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Destination extends BaseDto
{
    /**
     * @param  string  $name  The developer-defined name for this destination.
     * @param  string  $destinationId  The destination identifier generated when you created the destination.
     * @param  DestinationResource  $resource  The destination resource types.
     */
    public function __construct(
        public readonly string $name,
        public readonly string $destinationId,
        public readonly DestinationResource $resource,
    ) {
    }
}
