<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class Location extends Dto
{
    /**
     * @param  ?string  $stateOrRegion  The state, county or region where the person, business or institution is located.
     * @param  ?string  $city  The city or town where the person, business or institution is located.
     * @param  ?string  $countryCode  The two digit country code. Follows ISO 3166-1 alpha-2 format.
     * @param  ?string  $postalCode  The postal code of that address. It contains a series of letters or digits or both, sometimes including spaces or punctuation.
     */
    public function __construct(
        public readonly ?string $stateOrRegion = null,
        public readonly ?string $city = null,
        public readonly ?string $countryCode = null,
        public readonly ?string $postalCode = null,
    ) {
    }
}
