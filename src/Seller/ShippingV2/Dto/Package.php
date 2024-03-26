<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Package extends BaseDto
{
    protected static array $complexArrayTypes = ['items' => [Item::class], 'charges' => [ChargeComponent::class]];

    /**
     * @param  Dimensions  $dimensions  A set of measurements for a three-dimensional object.
     * @param  Weight  $weight  The weight in the units indicated.
     * @param  Currency  $insuredValue  The monetary value in the currency indicated, in ISO 4217 standard format.
     * @param  string  $packageClientReferenceId  A client provided unique identifier for a package being shipped. This value should be saved by the client to pass as a parameter to the getShipmentDocuments operation.
     * @param  Item[]  $items  A list of items.
     * @param  ?bool  $isHazmat  When true, the package contains hazardous materials. Defaults to false.
     * @param  ?string  $sellerDisplayName  The seller name displayed on the label.
     * @param  ChargeComponent[]|null  $charges  A list of charges based on the shipping service charges applied on a package.
     */
    public function __construct(
        public readonly Dimensions $dimensions,
        public readonly Weight $weight,
        public readonly Currency $insuredValue,
        public readonly string $packageClientReferenceId,
        public readonly array $items,
        public readonly ?bool $isHazmat = null,
        public readonly ?string $sellerDisplayName = null,
        public readonly ?array $charges = null,
    ) {
    }
}
