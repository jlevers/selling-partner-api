<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OfferCountType extends BaseDto
{
    protected static array $attributeMap = ['offerCount' => 'OfferCount'];

    /**
     * @param  ?string  $condition  Indicates the condition of the item. For example: New, Used, Collectible, Refurbished, or Club.
     * @param  ?string  $fulfillmentChannel  Indicates whether the item is fulfilled by Amazon or by the seller (merchant).
     * @param  ?int  $offerCount  The number of offers in a fulfillment channel that meet a specific condition.
     */
    public function __construct(
        public readonly ?string $condition = null,
        public readonly ?string $fulfillmentChannel = null,
        public readonly ?int $offerCount = null,
    ) {
    }
}
