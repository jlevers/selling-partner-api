<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Price extends BaseDto
{
    /**
     * @param  string  $status The status of the operation.
     * @param  ?string  $sellerSku The seller stock keeping unit (SKU) of the item.
     * @param  ?string  $asin The Amazon Standard Identification Number (ASIN) of the item.
     * @param  ?Product  $product An item.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly string $status,
        public readonly ?string $sellerSku = null,
        public readonly ?string $asin = null,
        public readonly ?Product $product = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
