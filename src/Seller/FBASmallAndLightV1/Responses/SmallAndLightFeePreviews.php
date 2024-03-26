<?php

namespace SellingPartnerApi\Seller\FBASmallAndLightV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\FBASmallAndLightV1\Dto\FeePreview;

final class SmallAndLightFeePreviews extends BaseResponse
{
    protected static array $complexArrayTypes = ['data' => [FeePreview::class]];

    /**
     * @param  FeePreview[]|null  $data  A list of fee estimates for the requested items. The order of the fee estimates will follow the same order as the items in the request, with duplicates removed.
     */
    public function __construct(
        public readonly ?array $data = null,
    ) {
    }
}
