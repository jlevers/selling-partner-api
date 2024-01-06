<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto\GetAdditionalSellerInputsResult;

final class GetAdditionalSellerInputsResponse extends BaseResponse
{
    /**
     * @param  GetAdditionalSellerInputsResult  $payload The payload for the getAdditionalSellerInputs operation.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly GetAdditionalSellerInputsResult $payload,
        public readonly array $errors,
    ) {
    }
}
