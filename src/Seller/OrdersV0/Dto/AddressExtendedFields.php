<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use SellingPartnerApi\Dto;

final class AddressExtendedFields extends Dto
{
    protected static array $attributeMap = [
        'streetName' => 'StreetName',
        'streetNumber' => 'StreetNumber',
        'complement' => 'Complement',
        'neighborhood' => 'Neighborhood',
    ];

    /**
     * @param  ?string  $streetName  The street name.
     * @param  ?string  $streetNumber  The house number/building number/property number in the street.
     * @param  ?string  $complement  The floor number/unit number in the building/private house number.
     * @param  ?string  $neighborhood  The neighborhood. It's smaller than a region and an integral part of an address. It is used in some countries like Brazil.
     */
    public function __construct(
        public readonly ?string $streetName = null,
        public readonly ?string $streetNumber = null,
        public readonly ?string $complement = null,
        public readonly ?string $neighborhood = null,
    ) {
    }
}
