<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto\GetEligibleShipmentServicesResult;

final class GetEligibleShipmentServicesResponse extends BaseResponse
{
    /**
     * @param  GetEligibleShipmentServicesResult  $payload The payload for the getEligibleShipmentServices operation.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly GetEligibleShipmentServicesResult $payload,
        public readonly array $errors,
    ) {
    }
}
