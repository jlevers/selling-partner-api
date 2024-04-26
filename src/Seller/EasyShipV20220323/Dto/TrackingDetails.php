<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\EasyShipV20220323\Dto;

use SellingPartnerApi\Dto;

final class TrackingDetails extends Dto
{
    /**
     * @param  ?string  $trackingId  A string of up to 255 characters.
     */
    public function __construct(
        public readonly ?string $trackingId = null,
    ) {
    }
}
