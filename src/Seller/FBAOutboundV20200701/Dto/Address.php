<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Address extends BaseDto
{
    /**
     * @param  string  $name  The name of the person, business or institution at the address.
     * @param  string  $addressLine1  The first line of the address.
     * @param  string  $stateOrRegion  The state or region where the person, business or institution is located.
     * @param  string  $postalCode  The postal code of the address.
     * @param  string  $countryCode  The two digit country code. In ISO 3166-1 alpha-2 format.
     * @param  ?string  $addressLine2  Additional address information, if required.
     * @param  ?string  $addressLine3  Additional address information, if required.
     * @param  ?string  $city  The city where the person, business, or institution is located. This property is required in all countries except Japan. It should not be used in Japan.
     * @param  ?string  $districtOrCounty  The district or county where the person, business, or institution is located.
     * @param  ?string  $phone  The phone number of the person, business, or institution located at the address.
     */
    public function __construct(
        public readonly string $name,
        public readonly string $addressLine1,
        public readonly string $stateOrRegion,
        public readonly string $postalCode,
        public readonly string $countryCode,
        public readonly ?string $addressLine2 = null,
        public readonly ?string $addressLine3 = null,
        public readonly ?string $city = null,
        public readonly ?string $districtOrCounty = null,
        public readonly ?string $phone = null,
    ) {
    }
}
