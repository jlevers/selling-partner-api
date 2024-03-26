<?php

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OfferIdentifier extends BaseDto
{
    /**
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace for which data is returned.
     * @param  string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     * @param  ?string  $sellerId  The seller identifier for the offer.
     * @param  ?string  $sku  The seller stock keeping unit (SKU) of the item. This will only be present for the target offer, which belongs to the requesting seller.
     * @param  ?string  $fulfillmentType  Indicates whether the item is fulfilled by Amazon or by the seller (merchant).
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly string $asin,
        public readonly ?string $sellerId = null,
        public readonly ?string $sku = null,
        public readonly ?string $fulfillmentType = null,
    ) {
    }
}
