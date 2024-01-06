<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FulfillmentPreviewItem extends BaseDto
{
    /**
     * @param  string  $sellerSku The seller SKU of the item.
     * @param  int  $quantity The item quantity.
     * @param  string  $sellerFulfillmentOrderItemId A fulfillment order item identifier that the seller created with a call to the createFulfillmentOrder operation.
     * @param  Weight  $estimatedShippingWeight The weight.
     * @param  string  $shippingWeightCalculationMethod The method used to calculate the estimated shipping weight.
     */
    public function __construct(
        public readonly ?string $sellerSku = null,
        public readonly ?int $quantity = null,
        public readonly ?string $sellerFulfillmentOrderItemId = null,
        public readonly ?Weight $estimatedShippingWeight = null,
        public readonly ?string $shippingWeightCalculationMethod = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
