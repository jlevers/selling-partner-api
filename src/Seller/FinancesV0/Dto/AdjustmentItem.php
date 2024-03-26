<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AdjustmentItem extends BaseDto
{
    protected static array $attributeMap = [
        'quantity' => 'Quantity',
        'perUnitAmount' => 'PerUnitAmount',
        'totalAmount' => 'TotalAmount',
        'sellerSku' => 'SellerSKU',
        'fnSku' => 'FnSKU',
        'productDescription' => 'ProductDescription',
        'asin' => 'ASIN',
    ];

    /**
     * @param  ?string  $quantity  Represents the number of units in the seller's inventory when the AdustmentType is FBAInventoryReimbursement.
     * @param  ?Currency  $perUnitAmount  A currency type and amount.
     * @param  ?Currency  $totalAmount  A currency type and amount.
     * @param  ?string  $sellerSku  The seller SKU of the item. The seller SKU is qualified by the seller's seller ID, which is included with every call to the Selling Partner API.
     * @param  ?string  $fnSku  A unique identifier assigned to products stored in and fulfilled from a fulfillment center.
     * @param  ?string  $productDescription  A short description of the item.
     * @param  ?string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     */
    public function __construct(
        public readonly ?string $quantity = null,
        public readonly ?Currency $perUnitAmount = null,
        public readonly ?Currency $totalAmount = null,
        public readonly ?string $sellerSku = null,
        public readonly ?string $fnSku = null,
        public readonly ?string $productDescription = null,
        public readonly ?string $asin = null,
    ) {
    }
}
