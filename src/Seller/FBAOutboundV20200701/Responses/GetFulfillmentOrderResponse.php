<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Dto\GetFulfillmentOrderResult;

final class GetFulfillmentOrderResponse extends BaseResponse
{
    /**
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly GetFulfillmentOrderResult $payload,
        public readonly array $errors,
    ) {
    }
}
