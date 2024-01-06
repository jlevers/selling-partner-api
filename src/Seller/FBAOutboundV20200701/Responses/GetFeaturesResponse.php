<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Dto\GetFeaturesResult;

final class GetFeaturesResponse extends BaseResponse
{
    /**
     * @param  GetFeaturesResult  $payload The payload for the getFeatures operation.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly GetFeaturesResult $payload,
        public readonly array $errors,
    ) {
    }
}
