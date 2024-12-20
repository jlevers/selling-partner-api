<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use SellingPartnerApi\Dto;

final class ServiceRate extends Dto
{
    /**
     * @param  Currency  $totalCharge  The total value of all items in the container.
     * @param  Weight  $billableWeight  The weight.
     * @param  string  $serviceType  The type of shipping service that will be used for the service offering.
     * @param  ShippingPromiseSet  $promise  The promised delivery time and pickup time.
     */
    public function __construct(
        public Currency $totalCharge,
        public Weight $billableWeight,
        public string $serviceType,
        public ShippingPromiseSet $promise,
    ) {}
}
