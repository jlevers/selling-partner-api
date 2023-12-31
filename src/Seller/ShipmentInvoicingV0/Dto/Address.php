<?php

namespace SellingPartnerApi\Seller\ShipmentInvoicingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Address extends BaseDto
{
    /**
     * @param  string  $name The name.
     * @param  string  $addressLine1 The street address.
     * @param  string  $addressLine2 Additional street address information, if required.
     * @param  string  $addressLine3 Additional street address information, if required.
     * @param  string  $city The city.
     * @param  string  $county The county.
     * @param  string  $district The district.
     * @param  string  $stateOrRegion The state or region.
     * @param  string  $postalCode The postal code.
     * @param  string  $countryCode The country code.
     * @param  string  $phone The phone number.
     * @param  string  $addressType The shipping address type.
     */
    public function __construct(
        public readonly string $name,
        public readonly string $addressLine1,
        public readonly string $addressLine2,
        public readonly string $addressLine3,
        public readonly string $city,
        public readonly string $county,
        public readonly string $district,
        public readonly string $stateOrRegion,
        public readonly string $postalCode,
        public readonly string $countryCode,
        public readonly string $phone,
        public readonly string $addressType,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
