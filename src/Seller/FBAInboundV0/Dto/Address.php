<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Address extends BaseDto
{
    protected static array $attributeMap = [
        'name' => 'Name',
        'addressLine1' => 'AddressLine1',
        'city' => 'City',
        'stateOrProvinceCode' => 'StateOrProvinceCode',
        'countryCode' => 'CountryCode',
        'postalCode' => 'PostalCode',
        'addressLine2' => 'AddressLine2',
        'districtOrCounty' => 'DistrictOrCounty',
    ];

    /**
     * @param  string  $name  Name of the individual or business.
     * @param  string  $addressLine1  The street address information.
     * @param  string  $city  The city.
     * @param  string  $stateOrProvinceCode  The state or province code.
     *
     * If state or province codes are used in your marketplace, it is recommended that you include one with your request. This helps Amazon to select the most appropriate Amazon fulfillment center for your inbound shipment plan.
     * @param  string  $countryCode  The country code in two-character ISO 3166-1 alpha-2 format.
     * @param  string  $postalCode  The postal code.
     *
     * If postal codes are used in your marketplace, we recommended that you include one with your request. This helps Amazon select the most appropriate Amazon fulfillment center for the inbound shipment plan.
     * @param  ?string  $addressLine2  Additional street address information, if required.
     * @param  ?string  $districtOrCounty  The district or county.
     */
    public function __construct(
        public readonly string $name,
        public readonly string $addressLine1,
        public readonly string $city,
        public readonly string $stateOrProvinceCode,
        public readonly string $countryCode,
        public readonly string $postalCode,
        public readonly ?string $addressLine2 = null,
        public readonly ?string $districtOrCounty = null,
    ) {
    }
}
