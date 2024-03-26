<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Item extends BaseDto
{
    /**
     * @param  int  $quantity  The number of units. This value is required.
     * @param  ?Currency  $itemValue  The monetary value in the currency indicated, in ISO 4217 standard format.
     * @param  ?string  $description  The product description of the item.
     * @param  ?string  $itemIdentifier  A unique identifier for an item provided by the client.
     * @param  ?Weight  $weight  The weight in the units indicated.
     * @param  ?bool  $isHazmat  When true, the item qualifies as hazardous materials (hazmat). Defaults to false.
     * @param  ?string  $productType  The product type of the item.
     * @param  ?InvoiceDetails  $invoiceDetails  The invoice details for charges associated with the goods in the package. Only applies to certain regions.
     * @param  ?string[]  $serialNumbers  A list of unique serial numbers in an Amazon package that can be used to guarantee non-fraudulent items. The number of serial numbers in the list must be less than or equal to the quantity of items being shipped. Only applicable when channel source is Amazon.
     * @param  ?DirectFulfillmentItemIdentifiers  $directFulfillmentItemIdentifiers  Item identifiers for an item in a direct fulfillment shipment.
     */
    public function __construct(
        public readonly int $quantity,
        public readonly ?Currency $itemValue = null,
        public readonly ?string $description = null,
        public readonly ?string $itemIdentifier = null,
        public readonly ?Weight $weight = null,
        public readonly ?bool $isHazmat = null,
        public readonly ?string $productType = null,
        public readonly ?InvoiceDetails $invoiceDetails = null,
        public readonly ?array $serialNumbers = null,
        public readonly ?DirectFulfillmentItemIdentifiers $directFulfillmentItemIdentifiers = null,
    ) {
    }
}
