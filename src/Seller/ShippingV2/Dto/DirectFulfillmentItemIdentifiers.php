<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class DirectFulfillmentItemIdentifiers extends BaseDto
{
    protected static array $attributeMap = ['lineItemId' => 'lineItemID'];

    /**
     * @param  string  $lineItemId  A unique identifier for an item provided by the client for a direct fulfillment shipment. This is only populated for direct fulfillment multi-piece shipments. It is required if a vendor wants to change the configuration of the packages in which the purchase order is shipped.
     * @param  ?string  $pieceNumber  A unique identifier for an item provided by the client for a direct fulfillment shipment. This is only populated if a single line item has multiple pieces. Defaults to 1.
     */
    public function __construct(
        public readonly string $lineItemId,
        public readonly ?string $pieceNumber = null,
    ) {
    }
}
