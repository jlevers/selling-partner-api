<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use SellingPartnerApi\Dto;

final class VariablePrecisionAddress extends Dto
{
    /**
     * @param  string  $postalCode  The postal code of the address.
     * @param  string  $countryCode  The two digit country code. In ISO 3166-1 alpha-2 format.
     * @param  ?string  $addressLine1  The first line of the address.
     * @param  ?string  $addressLine2  Additional address information, if required.
     * @param  ?string  $addressLine3  Additional address information, if required.
     * @param  ?string  $city  The city where the person, business, or institution is located. This property should not be used in Japan.
     * @param  ?string  $districtOrCounty  The district or county where the person, business, or institution is located.
     * @param  ?string  $stateOrRegion  The state or region where the person, business or institution is located.
     */
    public function __construct(
        public string $postalCode,
        public string $countryCode,
        public ?string $addressLine1 = null,
        public ?string $addressLine2 = null,
        public ?string $addressLine3 = null,
        public ?string $city = null,
        public ?string $districtOrCounty = null,
        public ?string $stateOrRegion = null,
    ) {}
}
