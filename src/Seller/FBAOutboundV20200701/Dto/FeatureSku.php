<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FeatureSku extends BaseDto
{
    /**
     * @param  ?string  $sellerSku  Used to identify an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.
     * @param  ?string  $fnSku  The unique SKU used by Amazon's fulfillment network.
     * @param  ?string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     * @param  ?float  $skuCount  The number of SKUs available for this service.
     * @param  ?string[]  $overlappingSkus  Other seller SKUs that are shared across the same inventory.
     */
    public function __construct(
        public readonly ?string $sellerSku = null,
        public readonly ?string $fnSku = null,
        public readonly ?string $asin = null,
        public readonly ?float $skuCount = null,
        public readonly ?array $overlappingSkus = null,
    ) {
    }
}
