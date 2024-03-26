<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Address extends BaseDto
{
    protected static array $attributeMap = [
        'name' => 'Name',
        'addressLine1' => 'AddressLine1',
        'email' => 'Email',
        'city' => 'City',
        'postalCode' => 'PostalCode',
        'countryCode' => 'CountryCode',
        'phone' => 'Phone',
        'addressLine2' => 'AddressLine2',
        'addressLine3' => 'AddressLine3',
        'districtOrCounty' => 'DistrictOrCounty',
        'stateOrProvinceCode' => 'StateOrProvinceCode',
    ];

    /**
     * @param  string  $name  The name of the addressee, or business name.
     * @param  string  $addressLine1  The street address information.
     * @param  string  $email  The email address.
     * @param  string  $city  The city.
     * @param  string  $postalCode  The zip code or postal code.
     * @param  string  $countryCode  The country code. A two-character country code, in ISO 3166-1 alpha-2 format.
     * @param  string  $phone  The phone number.
     * @param  ?string  $addressLine2  Additional street address information.
     * @param  ?string  $addressLine3  Additional street address information.
     * @param  ?string  $districtOrCounty  The district or county.
     * @param  ?string  $stateOrProvinceCode  The state or province code. **Note.** Required in the Canada, US, and UK marketplaces. Also required for shipments originating from China.
     */
    public function __construct(
        public readonly string $name,
        public readonly string $addressLine1,
        public readonly string $email,
        public readonly string $city,
        public readonly string $postalCode,
        public readonly string $countryCode,
        public readonly string $phone,
        public readonly ?string $addressLine2 = null,
        public readonly ?string $addressLine3 = null,
        public readonly ?string $districtOrCounty = null,
        public readonly ?string $stateOrProvinceCode = null,
    ) {
    }
}
