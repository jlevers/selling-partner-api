<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use SellingPartnerApi\Dto;

final class OrderAcknowledgement extends Dto
{
    protected static array $complexArrayTypes = ['items' => [OrderItem::class]];

    /**
     * @param  string  $purchaseOrderNumber  The purchase order number. Formatting Notes: 8-character alpha-numeric code.
     * @param  \DateTimeInterface  $acknowledgementDate  The date and time when the purchase order is acknowledged, in ISO-8601 date/time format.
     * @param  OrderItem[]  $items  A list of items in this purchase order.
     */
    public function __construct(
        public readonly string $purchaseOrderNumber,
        public readonly PartyIdentification $sellingParty,
        public readonly \DateTimeInterface $acknowledgementDate,
        public readonly array $items,
    ) {
    }
}
