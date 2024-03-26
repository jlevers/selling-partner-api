<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CreateFulfillmentOrderItem extends BaseDto
{
    /**
     * @param  string  $sellerSku  The seller SKU of the item.
     * @param  string  $sellerFulfillmentOrderItemId  A fulfillment order item identifier that the seller creates to track fulfillment order items. Used to disambiguate multiple fulfillment items that have the same SellerSKU. For example, the seller might assign different SellerFulfillmentOrderItemId values to two items in a fulfillment order that share the same SellerSKU but have different GiftMessage values.
     * @param  int  $quantity  The item quantity.
     * @param  ?string  $giftMessage  A message to the gift recipient, if applicable.
     * @param  ?string  $displayableComment  Item-specific text that displays in recipient-facing materials such as the outbound shipment packing slip.
     * @param  ?string  $fulfillmentNetworkSku  Amazon's fulfillment network SKU of the item.
     * @param  ?Money  $perUnitDeclaredValue  An amount of money, including units in the form of currency.
     * @param  ?Money  $perUnitPrice  An amount of money, including units in the form of currency.
     * @param  ?Money  $perUnitTax  An amount of money, including units in the form of currency.
     */
    public function __construct(
        public readonly string $sellerSku,
        public readonly string $sellerFulfillmentOrderItemId,
        public readonly int $quantity,
        public readonly ?string $giftMessage = null,
        public readonly ?string $displayableComment = null,
        public readonly ?string $fulfillmentNetworkSku = null,
        public readonly ?Money $perUnitDeclaredValue = null,
        public readonly ?Money $perUnitPrice = null,
        public readonly ?Money $perUnitTax = null,
    ) {
    }
}
