<?php

namespace SellingPartnerApi\Seller\ShippingV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ShippingV1\Dto\RetrieveShippingLabelResult;

final class RetrieveShippingLabelResponse extends BaseResponse
{
    /**
     * @param  RetrieveShippingLabelResult  $payload The payload schema for the retrieveShippingLabel operation.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly RetrieveShippingLabelResult $payload,
        public readonly array $errors,
    ) {
    }
}
