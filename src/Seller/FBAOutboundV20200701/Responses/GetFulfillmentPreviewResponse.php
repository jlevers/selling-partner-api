<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Dto\GetFulfillmentPreviewResult;

final class GetFulfillmentPreviewResponse extends BaseResponse
{
    /**
     * @param  GetFulfillmentPreviewResult  $payload A list of fulfillment order previews, including estimated shipping weights, estimated shipping fees, and estimated ship dates and arrival dates.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly GetFulfillmentPreviewResult $payload,
        public readonly array $errors,
    ) {
    }
}
