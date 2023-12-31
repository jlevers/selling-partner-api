<?php

namespace SellingPartnerApi\Seller\FBASmallAndLightV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class SmallAndLightEligibility extends BaseResponse
{
    /**
     * @param  string  $marketplaceId A marketplace identifier.
     * @param  string  $sellerSku Identifies an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.
     * @param  string  $status The Small and Light eligibility status of the item.
     */
    public function __construct(
        public readonly ?string $marketplaceId = null,
        public readonly ?string $sellerSku = null,
        public readonly ?string $status = null,
    ) {
    }
}
