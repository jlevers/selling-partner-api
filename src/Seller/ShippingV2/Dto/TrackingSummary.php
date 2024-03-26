<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TrackingSummary extends BaseDto
{
    /**
     * @param  ?string  $status  The status of the package being shipped.
     */
    public function __construct(
        public readonly ?string $status = null,
    ) {
    }
}
