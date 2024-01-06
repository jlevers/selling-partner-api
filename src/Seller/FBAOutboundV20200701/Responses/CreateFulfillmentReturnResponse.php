<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Dto\CreateFulfillmentReturnResult;

final class CreateFulfillmentReturnResponse extends BaseResponse
{
    /**
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly CreateFulfillmentReturnResult $payload,
        public readonly array $errors,
    ) {
    }
}
