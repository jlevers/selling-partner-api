<?php

namespace SellingPartnerApi\Seller\ShipmentInvoicingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ShipmentItem extends BaseDto
{
    protected static array $attributeMap = [
        'asin' => 'ASIN',
        'sellerSku' => 'SellerSKU',
        'orderItemId' => 'OrderItemId',
        'title' => 'Title',
        'quantityOrdered' => 'QuantityOrdered',
        'itemPrice' => 'ItemPrice',
        'shippingPrice' => 'ShippingPrice',
        'giftWrapPrice' => 'GiftWrapPrice',
        'shippingDiscount' => 'ShippingDiscount',
        'promotionDiscount' => 'PromotionDiscount',
        'serialNumbers' => 'SerialNumbers',
    ];

    /**
     * @param  ?string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     * @param  ?string  $sellerSku  The seller SKU of the item.
     * @param  ?string  $orderItemId  The Amazon-defined identifier for the order item.
     * @param  ?string  $title  The name of the item.
     * @param  ?float  $quantityOrdered  The number of items ordered.
     * @param  ?Money  $itemPrice  The currency type and amount.
     * @param  ?Money  $shippingPrice  The currency type and amount.
     * @param  ?Money  $giftWrapPrice  The currency type and amount.
     * @param  ?Money  $shippingDiscount  The currency type and amount.
     * @param  ?Money  $promotionDiscount  The currency type and amount.
     * @param  ?string[]  $serialNumbers  The list of serial numbers.
     */
    public function __construct(
        public readonly ?string $asin = null,
        public readonly ?string $sellerSku = null,
        public readonly ?string $orderItemId = null,
        public readonly ?string $title = null,
        public readonly ?float $quantityOrdered = null,
        public readonly ?Money $itemPrice = null,
        public readonly ?Money $shippingPrice = null,
        public readonly ?Money $giftWrapPrice = null,
        public readonly ?Money $shippingDiscount = null,
        public readonly ?Money $promotionDiscount = null,
        public readonly ?array $serialNumbers = null,
    ) {
    }
}
