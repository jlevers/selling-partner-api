<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Address extends BaseDto
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
     */
    public function __construct(
        public readonly string $name,
        public readonly string $addressLine1,
        public readonly string $stateOrRegion,
        public readonly string $city,
        public readonly string $countryCode,
        public readonly string $postalCode,
        public readonly ?string $addressLine2 = null,
        public readonly ?string $addressLine3 = null,
        public readonly ?string $companyName = null,
        public readonly ?string $email = null,
        public readonly ?string $phoneNumber = null,
    ) {
    }
}
