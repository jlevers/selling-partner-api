<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OrderDetails extends BaseDto
{
    protected static array $complexArrayTypes = ['items' => [OrderItem::class]];

    /**
     * @param  string  $customerOrderNumber  The customer order number.
     * @param  DateTime  $orderDate  The date the order was placed. This  field is expected to be in ISO-8601 date/time format, for example:2018-07-16T23:00:00Z/ 2018-07-16T23:00:00-05:00 /2018-07-16T23:00:00-08:00. If no time zone is specified, UTC should be assumed.
     * @param  ShipmentDetails  $shipmentDetails  Shipment details required for the shipment.
     * @param  Address  $shipToParty  Address of the party.
     * @param  ?string  $orderStatus  Current status of the order.
     * @param  ?TaxItemDetails  $taxTotal  Total tax details for the line item.
     * @param  OrderItem[]  $items  A list of items in this purchase order.
     */
    public function __construct(
        public readonly string $customerOrderNumber,
        public readonly \DateTime $orderDate,
        public readonly ShipmentDetails $shipmentDetails,
        public readonly PartyIdentification $sellingParty,
        public readonly PartyIdentification $shipFromParty,
        public readonly Address $shipToParty,
        public readonly PartyIdentification $billToParty,
        public readonly ?string $orderStatus = null,
        public readonly ?TaxItemDetails $taxTotal = null,
        public readonly ?array $items = null,
    ) {
    }
}
