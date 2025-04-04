<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class Item extends Dto
{
    /**
     * @param  int  $quantity  The number of units. This value is required.
     * @param  ?Currency  $itemValue  The monetary value in the currency indicated, in ISO 4217 standard format.
     * @param  ?string  $description  The product description of the item.
     * @param  ?string  $itemIdentifier  A unique identifier for an item provided by the client. Please use the Orders SP api and populate this field with the response parameter OrderItemId. Note: This is Required field for Amazon Marketplace Orders (ON Amazon type of requests).
     * @param  ?Weight  $weight  The weight in the units indicated.
     * @param  ?LiquidVolume  $liquidVolume  Liquid Volume.
     * @param  ?bool  $isHazmat  When true, the item qualifies as hazardous materials (hazmat). Defaults to false.
     * @param  ?DangerousGoodsDetails  $dangerousGoodsDetails  Details related to any dangerous goods/items that are being shipped.
     * @param  ?string  $productType  The product type of the item.
     * @param  ?InvoiceDetails  $invoiceDetails  The invoice details for charges associated with the goods in the package. Only applies to certain regions.
     * @param  ?string[]  $serialNumbers  A list of unique serial numbers in an Amazon package that can be used to guarantee non-fraudulent items. The number of serial numbers in the list must be less than or equal to the quantity of items being shipped. Only applicable when channel source is Amazon.
     * @param  ?DirectFulfillmentItemIdentifiers  $directFulfillmentItemIdentifiers  Item identifiers for an item in a direct fulfillment shipment.
     */
    public function __construct(
        public int $quantity,
        public ?Currency $itemValue = null,
        public ?string $description = null,
        public ?string $itemIdentifier = null,
        public ?Weight $weight = null,
        public ?LiquidVolume $liquidVolume = null,
        public ?bool $isHazmat = null,
        public ?DangerousGoodsDetails $dangerousGoodsDetails = null,
        public ?string $productType = null,
        public ?InvoiceDetails $invoiceDetails = null,
        public ?array $serialNumbers = null,
        public ?DirectFulfillmentItemIdentifiers $directFulfillmentItemIdentifiers = null,
    ) {}
}
