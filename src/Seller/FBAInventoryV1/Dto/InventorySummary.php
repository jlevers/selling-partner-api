<?php

namespace SellingPartnerApi\Seller\FBAInventoryV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class InventorySummary extends BaseDto
{
    /**
     * @param  ?string  $asin  The Amazon Standard Identification Number (ASIN) of an item.
     * @param  ?string  $fnSku  Amazon's fulfillment network SKU identifier.
     * @param  ?string  $sellerSku  The seller SKU of the item.
     * @param  ?string  $condition  The condition of the item as described by the seller (for example, New Item).
     * @param  ?InventoryDetails  $inventoryDetails  Summarized inventory details. This object will not appear if the details parameter in the request is false.
     * @param  ?DateTime  $lastUpdatedTime  The date and time that any quantity was last updated.
     * @param  ?string  $productName  The localized language product title of the item within the specific marketplace.
     * @param  ?int  $totalQuantity  The total number of units in an inbound shipment or in Amazon fulfillment centers.
     */
    public function __construct(
        public readonly ?string $asin = null,
        public readonly ?string $fnSku = null,
        public readonly ?string $sellerSku = null,
        public readonly ?string $condition = null,
        public readonly ?InventoryDetails $inventoryDetails = null,
        public readonly ?\DateTime $lastUpdatedTime = null,
        public readonly ?string $productName = null,
        public readonly ?int $totalQuantity = null,
    ) {
    }
}
