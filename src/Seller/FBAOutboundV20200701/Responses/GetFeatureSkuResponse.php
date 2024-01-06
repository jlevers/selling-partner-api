<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Dto\GetFeatureSkuResult;

final class GetFeatureSkuResponse extends BaseResponse
{
    /**
     * @param  GetFeatureSkuResult  $payload The payload for the getFeatureSKU operation.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly GetFeatureSkuResult $payload,
        public readonly array $errors,
    ) {
    }
}
