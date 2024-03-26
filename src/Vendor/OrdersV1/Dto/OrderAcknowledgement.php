<?php

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OrderAcknowledgement extends BaseDto
{
    protected static array $complexArrayTypes = ['items' => [OrderItem::class]];

    /**
     * @param  string  $purchaseOrderNumber  The purchase order number. Formatting Notes: 8-character alpha-numeric code.
     * @param  DateTime  $acknowledgementDate  The date and time when the purchase order is acknowledged, in ISO-8601 date/time format.
     * @param  OrderItem[]  $items  A list of items in this purchase order.
     */
    public function __construct(
        public readonly string $purchaseOrderNumber,
        public readonly PartyIdentification $sellingParty,
        public readonly ?array $items,
        public readonly \DateTime $acknowledgementDate,
    ) {
    }
}
