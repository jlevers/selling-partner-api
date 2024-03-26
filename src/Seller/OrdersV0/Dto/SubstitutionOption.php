<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SubstitutionOption extends BaseDto
{
    protected static array $attributeMap = [
        'asin' => 'ASIN',
        'quantityOrdered' => 'QuantityOrdered',
        'sellerSku' => 'SellerSKU',
        'title' => 'Title',
        'measurement' => 'Measurement',
    ];

    /**
     * @param  ?string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     * @param  ?int  $quantityOrdered  The number of items to be picked for this substitution option.
     * @param  ?string  $sellerSku  The seller stock keeping unit (SKU) of the item.
     * @param  ?string  $title  The title of the item.
     * @param  ?Measurement  $measurement
     */
    public function __construct(
        public readonly ?string $asin = null,
        public readonly ?int $quantityOrdered = null,
        public readonly ?string $sellerSku = null,
        public readonly ?string $title = null,
        public readonly ?Measurement $measurement = null,
    ) {
    }
}
