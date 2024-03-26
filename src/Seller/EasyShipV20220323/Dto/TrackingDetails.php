<?php

namespace SellingPartnerApi\Seller\EasyShipV20220323\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TrackingDetails extends BaseDto
{
    /**
     * @param  ?string  $trackingId  A string of up to 255 characters.
     */
    public function __construct(
        public readonly ?string $trackingId = null,
    ) {
    }
}
