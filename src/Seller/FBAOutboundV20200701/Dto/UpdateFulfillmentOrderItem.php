<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class UpdateFulfillmentOrderItem extends BaseDto
{
    /**
     * @param  string  $sellerFulfillmentOrderItemId  Identifies the fulfillment order item to update. Created with a previous call to the createFulfillmentOrder operation.
     * @param  int  $quantity  The item quantity.
     * @param  ?string  $sellerSku  The seller SKU of the item.
     * @param  ?string  $giftMessage  A message to the gift recipient, if applicable.
     * @param  ?string  $displayableComment  Item-specific text that displays in recipient-facing materials such as the outbound shipment packing slip.
     * @param  ?string  $fulfillmentNetworkSku  Amazon's fulfillment network SKU of the item.
     * @param  ?string  $orderItemDisposition  Indicates whether the item is sellable or unsellable.
     * @param  ?Money  $perUnitDeclaredValue  An amount of money, including units in the form of currency.
     * @param  ?Money  $perUnitPrice  An amount of money, including units in the form of currency.
     * @param  ?Money  $perUnitTax  An amount of money, including units in the form of currency.
     */
    public function __construct(
        public readonly string $sellerFulfillmentOrderItemId,
        public readonly int $quantity,
        public readonly ?string $sellerSku = null,
        public readonly ?string $giftMessage = null,
        public readonly ?string $displayableComment = null,
        public readonly ?string $fulfillmentNetworkSku = null,
        public readonly ?string $orderItemDisposition = null,
        public readonly ?Money $perUnitDeclaredValue = null,
        public readonly ?Money $perUnitPrice = null,
        public readonly ?Money $perUnitTax = null,
    ) {
    }
}
