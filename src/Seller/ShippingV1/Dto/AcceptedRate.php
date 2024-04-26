<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use SellingPartnerApi\Dto;

final class AcceptedRate extends Dto
{
    /**
     * @param  ?Currency  $totalCharge  The total value of all items in the container.
     * @param  ?Weight  $billedWeight  The weight.
     * @param  ?string  $serviceType  The type of shipping service that will be used for the service offering.
     * @param  ?ShippingPromiseSet  $promise  The promised delivery time and pickup time.
     */
    public function __construct(
        public readonly ?Currency $totalCharge = null,
        public readonly ?Weight $billedWeight = null,
        public readonly ?string $serviceType = null,
        public readonly ?ShippingPromiseSet $promise = null,
    ) {
    }
}
