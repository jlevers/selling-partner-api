<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Rate extends BaseDto
{
    /**
     * @param  ?string  $rateId  An identifier for the rate.
     * @param  ?Currency  $totalCharge  The total value of all items in the container.
     * @param  ?Weight  $billedWeight  The weight.
     * @param  ?DateTime  $expirationTime  The time after which the offering will expire.
     * @param  ?string  $serviceType  The type of shipping service that will be used for the service offering.
     * @param  ?ShippingPromiseSet  $promise  The promised delivery time and pickup time.
     */
    public function __construct(
        public readonly ?string $rateId = null,
        public readonly ?Currency $totalCharge = null,
        public readonly ?Weight $billedWeight = null,
        public readonly ?\DateTime $expirationTime = null,
        public readonly ?string $serviceType = null,
        public readonly ?ShippingPromiseSet $promise = null,
    ) {
    }
}
