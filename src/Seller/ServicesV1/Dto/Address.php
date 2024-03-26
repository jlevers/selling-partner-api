<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Address extends BaseDto
{
    /**
     * @param  string  $name  The name of the person, business, or institution.
     * @param  string  $addressLine1  The first line of the address.
     * @param  ?string  $addressLine2  Additional address information, if required.
     * @param  ?string  $addressLine3  Additional address information, if required.
     * @param  ?string  $city  The city.
     * @param  ?string  $county  The county.
     * @param  ?string  $district  The district.
     * @param  ?string  $stateOrRegion  The state or region.
     * @param  ?string  $postalCode  The postal code. This can contain letters, digits, spaces, and/or punctuation.
     * @param  ?string  $countryCode  The two digit country code, in ISO 3166-1 alpha-2 format.
     * @param  ?string  $phone  The phone number.
     */
    public function __construct(
        public readonly string $name,
        public readonly string $addressLine1,
        public readonly ?string $addressLine2 = null,
        public readonly ?string $addressLine3 = null,
        public readonly ?string $city = null,
        public readonly ?string $county = null,
        public readonly ?string $district = null,
        public readonly ?string $stateOrRegion = null,
        public readonly ?string $postalCode = null,
        public readonly ?string $countryCode = null,
        public readonly ?string $phone = null,
    ) {
    }
}
