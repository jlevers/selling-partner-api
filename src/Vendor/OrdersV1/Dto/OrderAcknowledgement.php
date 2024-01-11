<?php

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OrderAcknowledgement extends BaseDto
{
    protected static array $complexArrayTypes = ['items' => [OrderItem::class]];

    /**
     * @param  string  $purchaseOrderNumber The purchase order number. Formatting Notes: 8-character alpha-numeric code.
     * @param  string  $acknowledgementDate The date and time when the purchase order is acknowledged, in ISO-8601 date/time format.
     * @param  OrderItem[]  $items A list of items in this purchase order.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly string $purchaseOrderNumber,
        public readonly PartyIdentification $sellingParty,
        public readonly string $acknowledgementDate,
        public readonly ?array $items = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
