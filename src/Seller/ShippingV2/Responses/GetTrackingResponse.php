<?php

namespace SellingPartnerApi\Seller\ShippingV2\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ShippingV2\Dto\GetTrackingResult;

final class GetTrackingResponse extends BaseResponse
{
    /**
     * @param  ?GetTrackingResult  $payload  The payload for the getTracking operation.
     */
    public function __construct(
        public readonly ?GetTrackingResult $payload = null,
    ) {
    }
}
