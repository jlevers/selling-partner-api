<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ServiceRate extends BaseDto
{
    /**
     * @param  Currency  $totalCharge  The total value of all items in the container.
     * @param  Weight  $billableWeight  The weight.
     * @param  string  $serviceType  The type of shipping service that will be used for the service offering.
     * @param  ShippingPromiseSet  $promise  The promised delivery time and pickup time.
     */
    public function __construct(
        public readonly Currency $totalCharge,
        public readonly Weight $billableWeight,
        public readonly string $serviceType,
        public readonly ShippingPromiseSet $promise,
    ) {
    }
}
