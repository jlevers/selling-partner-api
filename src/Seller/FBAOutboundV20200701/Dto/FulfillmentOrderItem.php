<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FulfillmentOrderItem extends BaseDto
{
    /**
     * @param  string  $sellerSku  The seller SKU of the item.
     * @param  string  $sellerFulfillmentOrderItemId  A fulfillment order item identifier submitted with a call to the createFulfillmentOrder operation.
     * @param  int  $quantity  The item quantity.
     * @param  int  $cancelledQuantity  The item quantity.
     * @param  int  $unfulfillableQuantity  The item quantity.
     * @param  ?string  $giftMessage  A message to the gift recipient, if applicable.
     * @param  ?string  $displayableComment  Item-specific text that displays in recipient-facing materials such as the outbound shipment packing slip.
     * @param  ?string  $fulfillmentNetworkSku  Amazon's fulfillment network SKU of the item.
     * @param  ?string  $orderItemDisposition  Indicates whether the item is sellable or unsellable.
     * @param  ?DateTime  $estimatedShipDate
     * @param  ?DateTime  $estimatedArrivalDate
     * @param  ?Money  $perUnitPrice  An amount of money, including units in the form of currency.
     * @param  ?Money  $perUnitTax  An amount of money, including units in the form of currency.
     * @param  ?Money  $perUnitDeclaredValue  An amount of money, including units in the form of currency.
     */
    public function __construct(
        public readonly string $sellerSku,
        public readonly string $sellerFulfillmentOrderItemId,
        public readonly int $quantity,
        public readonly int $cancelledQuantity,
        public readonly int $unfulfillableQuantity,
        public readonly ?string $giftMessage = null,
        public readonly ?string $displayableComment = null,
        public readonly ?string $fulfillmentNetworkSku = null,
        public readonly ?string $orderItemDisposition = null,
        public readonly ?\DateTime $estimatedShipDate = null,
        public readonly ?\DateTime $estimatedArrivalDate = null,
        public readonly ?Money $perUnitPrice = null,
        public readonly ?Money $perUnitTax = null,
        public readonly ?Money $perUnitDeclaredValue = null,
    ) {
    }
}
