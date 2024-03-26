<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TrackingSummary extends BaseDto
{
    /**
     * @param  ?string  $status  The derived status based on the events in the eventHistory.
     */
    public function __construct(
        public readonly ?string $status = null,
    ) {
    }
}
