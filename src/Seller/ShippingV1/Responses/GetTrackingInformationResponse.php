<?php

namespace SellingPartnerApi\Seller\ShippingV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ShippingV1\Dto\TrackingInformation;

final class GetTrackingInformationResponse extends BaseResponse
{
    /**
     * @param  TrackingInformation  $payload The payload schema for the getTrackingInformation operation.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly TrackingInformation $payload,
        public readonly array $errors,
    ) {
    }
}
