<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Item extends BaseDto
{
    protected static array $attributeMap = [
        'orderItemId' => 'OrderItemId',
        'quantity' => 'Quantity',
        'itemWeight' => 'ItemWeight',
        'itemDescription' => 'ItemDescription',
        'transparencyCodeList' => 'TransparencyCodeList',
        'itemLevelSellerInputsList' => 'ItemLevelSellerInputsList',
    ];

    protected static array $complexArrayTypes = ['itemLevelSellerInputsList' => [AdditionalSellerInputs::class]];

    /**
     * @param  string  $orderItemId  An Amazon-defined identifier for an individual item in an order.
     * @param  int  $quantity  The number of items.
     * @param  ?Weight  $itemWeight  The weight.
     * @param  ?string  $itemDescription  The description of the item.
     * @param  ?string[]  $transparencyCodeList  A list of transparency codes.
     * @param  AdditionalSellerInputs[]|null  $itemLevelSellerInputsList  A list of additional seller input pairs required to purchase shipping.
     */
    public function __construct(
        public readonly string $orderItemId,
        public readonly int $quantity,
        public readonly ?Weight $itemWeight = null,
        public readonly ?string $itemDescription = null,
        public readonly ?array $transparencyCodeList = null,
        public readonly ?array $itemLevelSellerInputsList = null,
    ) {
    }
}
