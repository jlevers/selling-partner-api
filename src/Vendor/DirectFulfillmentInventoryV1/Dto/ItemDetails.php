<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentInventoryV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemDetails extends BaseDto
{
    /**
     * @param  ItemQuantity  $availableQuantity  Details of item quantity.
     * @param  ?string  $buyerProductIdentifier  The buyer selected product identification of the item. Either buyerProductIdentifier or vendorProductIdentifier should be submitted.
     * @param  ?string  $vendorProductIdentifier  The vendor selected product identification of the item. Either buyerProductIdentifier or vendorProductIdentifier should be submitted.
     * @param  ?bool  $isObsolete  When true, the item is permanently unavailable.
     */
    public function __construct(
        public readonly ItemQuantity $availableQuantity,
        public readonly ?string $buyerProductIdentifier = null,
        public readonly ?string $vendorProductIdentifier = null,
        public readonly ?bool $isObsolete = null,
    ) {
    }
}
