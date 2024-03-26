<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FulfillmentShipmentItem extends BaseDto
{
    /**
     * @param  string  $sellerSku  The seller SKU of the item.
     * @param  string  $sellerFulfillmentOrderItemId  The fulfillment order item identifier that the seller created and submitted with a call to the createFulfillmentOrder operation.
     * @param  int  $quantity  The item quantity.
     * @param  ?int  $packageNumber  An identifier for the package that contains the item quantity.
     * @param  ?string  $serialNumber  The serial number of the shipped item.
     */
    public function __construct(
        public readonly string $sellerSku,
        public readonly string $sellerFulfillmentOrderItemId,
        public readonly int $quantity,
        public readonly ?int $packageNumber = null,
        public readonly ?string $serialNumber = null,
    ) {
    }
}
