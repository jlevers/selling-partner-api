<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use SellingPartnerApi\Dto;

final class UpdateFulfillmentOrderItem extends Dto
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
        public string $sellerFulfillmentOrderItemId,
        public int $quantity,
        public ?string $sellerSku = null,
        public ?string $giftMessage = null,
        public ?string $displayableComment = null,
        public ?string $fulfillmentNetworkSku = null,
        public ?string $orderItemDisposition = null,
        public ?Money $perUnitDeclaredValue = null,
        public ?Money $perUnitPrice = null,
        public ?Money $perUnitTax = null,
    ) {}
}
