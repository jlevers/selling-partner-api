<?php

namespace SellingPartnerApi\Seller\FBASmallAndLightV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class SmallAndLightFeePreviews extends BaseResponse
{
    /**
     * @param  FeePreview[]  $data A list of fee estimates for the requested items. The order of the fee estimates will follow the same order as the items in the request, with duplicates removed.
     */
    public function __construct(
        public readonly array $data,
    ) {
    }
}
