<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Address extends BaseDto
{
    protected static array $attributeMap = [
        'name' => 'Name',
        'addressLine1' => 'AddressLine1',
        'addressLine2' => 'AddressLine2',
        'addressLine3' => 'AddressLine3',
        'city' => 'City',
        'county' => 'County',
        'district' => 'District',
        'stateOrRegion' => 'StateOrRegion',
        'municipality' => 'Municipality',
        'postalCode' => 'PostalCode',
        'countryCode' => 'CountryCode',
        'phone' => 'Phone',
        'addressType' => 'AddressType',
    ];

    /**
     * @param  ?string  $name  The name.
     * @param  ?string  $addressLine1  The street address.
     * @param  ?string  $addressLine2  Additional street address information, if required.
     * @param  ?string  $addressLine3  Additional street address information, if required.
     * @param  ?string  $city  The city
     * @param  ?string  $county  The county.
     * @param  ?string  $district  The district.
     * @param  ?string  $stateOrRegion  The state or region.
     * @param  ?string  $municipality  The municipality.
     * @param  ?string  $postalCode  The postal code.
     * @param  ?string  $countryCode  The country code. A two-character country code, in ISO 3166-1 alpha-2 format.
     * @param  ?string  $phone  The phone number. Not returned for Fulfillment by Amazon (FBA) orders.
     * @param  ?string  $addressType  The address type of the shipping address.
     */
    public function __construct(
        public readonly ?string $name = null,
        public readonly ?string $addressLine1 = null,
        public readonly ?string $addressLine2 = null,
        public readonly ?string $addressLine3 = null,
        public readonly ?string $city = null,
        public readonly ?string $county = null,
        public readonly ?string $district = null,
        public readonly ?string $stateOrRegion = null,
        public readonly ?string $municipality = null,
        public readonly ?string $postalCode = null,
        public readonly ?string $countryCode = null,
        public readonly ?string $phone = null,
        public readonly ?string $addressType = null,
    ) {
    }
}
