<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class TrackingSummary extends Dto
{
    /**
     * @param  ?string  $status  The status of the package being shipped.
     */
    public function __construct(
        public readonly ?string $status = null,
    ) {
    }
}
