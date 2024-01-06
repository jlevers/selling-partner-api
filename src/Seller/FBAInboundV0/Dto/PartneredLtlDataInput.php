<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PartneredLtlDataInput extends BaseDto
{
    protected static array $complexArrayTypes = ['palletList' => [Pallet::class]];

    /**
     * @param  Contact  $contact Contact information for the person in the seller's organization who is responsible for a Less Than Truckload/Full Truckload (LTL/FTL) shipment.
     * @param  string  $sellerFreightClass The freight class of the shipment. For information about determining the freight class, contact the carrier.
     * @param  Pallet[]  $palletList A list of pallet information.
     * @param  Weight  $totalWeight The weight of the package.
     * @param  Amount  $sellerDeclaredValue The monetary value.
     */
    public function __construct(
        public readonly Contact $contact,
        public readonly int $boxCount,
        public readonly string $sellerFreightClass,
        public readonly string $freightReadyDate,
        public readonly array $palletList,
        public readonly Weight $totalWeight,
        public readonly Amount $sellerDeclaredValue,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
