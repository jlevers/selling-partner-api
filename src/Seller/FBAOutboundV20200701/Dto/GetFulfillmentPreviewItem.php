<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetFulfillmentPreviewItem extends BaseDto
{
    /**
     * @param  string  $sellerSku The seller SKU of the item.
     * @param  int  $quantity The item quantity.
     * @param  Money  $perUnitDeclaredValue An amount of money, including units in the form of currency.
     * @param  string  $sellerFulfillmentOrderItemId A fulfillment order item identifier that the seller creates to track items in the fulfillment preview.
     */
    public function __construct(
        public readonly ?string $sellerSku = null,
        public readonly ?int $quantity = null,
        public readonly ?Money $perUnitDeclaredValue = null,
        public readonly ?string $sellerFulfillmentOrderItemId = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
