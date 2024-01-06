<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Dto\GetFeatureInventoryResult;

final class GetFeatureInventoryResponse extends BaseResponse
{
    /**
     * @param  GetFeatureInventoryResult  $payload The payload for the getEligibileInventory operation.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly GetFeatureInventoryResult $payload,
        public readonly array $errors,
    ) {
    }
}
