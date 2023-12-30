<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OrderDetails extends BaseDto
{
    protected static array $complexArrayTypes = ['items' => [OrderItem::class]];

    /**
     * @param  string  $customerOrderNumber The customer order number.
     * @param  string  $orderDate The date the order was placed. This  field is expected to be in ISO-8601 date/time format, for example:2018-07-16T23:00:00Z/ 2018-07-16T23:00:00-05:00 /2018-07-16T23:00:00-08:00. If no time zone is specified, UTC should be assumed.
     * @param  OrderItem[]  $items A list of items in this purchase order.
     * @param  string  $orderStatus Current status of the order.
     * @param  ShipmentDetails  $shipmentDetails Shipment details required for the shipment.
     * @param  TaxItemDetails  $taxTotal Total tax details for the line item.
     * @param  Address  $shipToParty Address of the party.
     */
    public function __construct(
        public readonly string $customerOrderNumber,
        public readonly string $orderDate,
        public readonly array $items,
        public readonly ?string $orderStatus = null,
        public readonly ?ShipmentDetails $shipmentDetails = null,
        public readonly ?TaxItemDetails $taxTotal = null,
        public readonly ?PartyIdentification $sellingParty = null,
        public readonly ?PartyIdentification $shipFromParty = null,
        public readonly ?Address $shipToParty = null,
        public readonly ?PartyIdentification $billToParty = null,
    ) {
    }
}
