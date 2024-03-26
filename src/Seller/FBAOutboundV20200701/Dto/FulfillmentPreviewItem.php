<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FulfillmentPreviewItem extends BaseDto
{
    /**
     * @param  string  $sellerSku  The seller SKU of the item.
     * @param  int  $quantity  The item quantity.
     * @param  string  $sellerFulfillmentOrderItemId  A fulfillment order item identifier that the seller created with a call to the createFulfillmentOrder operation.
     * @param  ?Weight  $estimatedShippingWeight  The weight.
     * @param  ?string  $shippingWeightCalculationMethod  The method used to calculate the estimated shipping weight.
     */
    public function __construct(
        public readonly string $sellerSku,
        public readonly int $quantity,
        public readonly string $sellerFulfillmentOrderItemId,
        public readonly ?Weight $estimatedShippingWeight = null,
        public readonly ?string $shippingWeightCalculationMethod = null,
    ) {
    }
}
