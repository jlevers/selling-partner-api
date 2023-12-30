<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OrderAcknowledgementItem extends BaseDto
{
    protected static array $complexArrayTypes = ['itemAcknowledgements' => [OrderItemAcknowledgement::class]];

    /**
     * @param  string  $purchaseOrderNumber The purchase order number for this order. Formatting Notes: alpha-numeric code.
     * @param  string  $vendorOrderNumber The vendor's order number for this order.
     * @param  string  $acknowledgementDate The date and time when the order is acknowledged, in ISO-8601 date/time format. For example: 2018-07-16T23:00:00Z / 2018-07-16T23:00:00-05:00 / 2018-07-16T23:00:00-08:00.
     * @param  OrderItemAcknowledgement[]  $itemAcknowledgements Item details including acknowledged quantity.
     * @param  AcknowledgementStatus  $acknowledgementStatus Status of acknowledgement.
     */
    public function __construct(
        public readonly string $purchaseOrderNumber,
        public readonly string $vendorOrderNumber,
        public readonly string $acknowledgementDate,
        public readonly array $itemAcknowledgements,
        public readonly ?AcknowledgementStatus $acknowledgementStatus = null,
        public readonly ?PartyIdentification $sellingParty = null,
        public readonly ?PartyIdentification $shipFromParty = null,
    ) {
    }
}
