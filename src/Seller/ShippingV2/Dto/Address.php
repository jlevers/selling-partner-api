<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class Address extends Dto
{
    /**
     * @param  string  $name  The name of the person, business or institution at the address.
     * @param  string  $addressLine1  The first line of the address.
     * @param  string  $stateOrRegion  The state, county or region where the person, business or institution is located.
     * @param  string  $city  The city or town where the person, business or institution is located.
     * @param  string  $countryCode  The two digit country code. Follows ISO 3166-1 alpha-2 format.
     * @param  string  $postalCode  The postal code of that address. It contains a series of letters or digits or both, sometimes including spaces or punctuation.
     * @param  ?string  $addressLine2  Additional address information, if required.
     * @param  ?string  $addressLine3  Additional address information, if required.
     * @param  ?string  $companyName  The name of the business or institution associated with the address.
     * @param  ?string  $email  The email address of the contact associated with the address.
     * @param  ?string  $phoneNumber  The phone number of the person, business or institution located at that address, including the country calling code.
     * @param  ?Geocode  $geocode  Defines the latitude and longitude of the access point.
     */
    public function __construct(
        public string $name,
        public string $addressLine1,
        public string $stateOrRegion,
        public string $city,
        public string $countryCode,
        public string $postalCode,
        public ?string $addressLine2 = null,
        public ?string $addressLine3 = null,
        public ?string $companyName = null,
        public ?string $email = null,
        public ?string $phoneNumber = null,
        public ?Geocode $geocode = null,
    ) {}
}
