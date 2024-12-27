<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto;

use SellingPartnerApi\Dto;

final class Address extends Dto
{
    /**
     * @param  string  $name  The name of the person, business or institution at that address.
     * @param  string  $addressLine1  First line of the address.
     * @param  string  $countryCode  The two-letter country code in [ISO 3166-1 alpha-2](https://www.iban.com/country-codes) format.
     * @param  ?string  $addressLine2  Additional street address information, if required.
     * @param  ?string  $addressLine3  Additional street address information, if required.
     * @param  ?string  $city  The city where the person, business or institution is located.
     * @param  ?string  $county  The county where person, business or institution is located.
     * @param  ?string  $district  The district where person, business or institution is located.
     * @param  ?string  $stateOrRegion  The state or region where person, business or institution is located.
     * @param  ?string  $postalCode  The postal code of that address. It contains a series of letters or digits or both, sometimes including spaces or punctuation.
     * @param  ?string  $phone  The phone number of the person, business or institution located at that address.
     */
    public function __construct(
        public string $name,
        public string $addressLine1,
        public string $countryCode,
        public ?string $addressLine2 = null,
        public ?string $addressLine3 = null,
        public ?string $city = null,
        public ?string $county = null,
        public ?string $district = null,
        public ?string $stateOrRegion = null,
        public ?string $postalCode = null,
        public ?string $phone = null,
    ) {}
}
