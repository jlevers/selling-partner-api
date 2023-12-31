<?php

namespace SellingPartnerApi\Seller\ShipmentInvoicingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ShipmentItem extends BaseDto
{
    /**
     * @param  string  $asin The Amazon Standard Identification Number (ASIN) of the item.
     * @param  string  $sellerSku The seller SKU of the item.
     * @param  string  $orderItemId The Amazon-defined identifier for the order item.
     * @param  string  $title The name of the item.
     * @param  float  $quantityOrdered The number of items ordered.
     * @param  Money  $itemPrice The currency type and amount.
     * @param  Money  $shippingPrice The currency type and amount.
     * @param  Money  $giftWrapPrice The currency type and amount.
     * @param  Money  $shippingDiscount The currency type and amount.
     * @param  Money  $promotionDiscount The currency type and amount.
     * @param  string[]  $serialNumbers The list of serial numbers.
     */
    public function __construct(
        public readonly string $asin,
        public readonly string $sellerSku,
        public readonly string $orderItemId,
        public readonly string $title,
        public readonly float $quantityOrdered,
        public readonly Money $itemPrice,
        public readonly Money $shippingPrice,
        public readonly Money $giftWrapPrice,
        public readonly Money $shippingDiscount,
        public readonly Money $promotionDiscount,
        public readonly array $serialNumbers,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
