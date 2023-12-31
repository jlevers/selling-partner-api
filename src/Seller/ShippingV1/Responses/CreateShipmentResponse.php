<?php

namespace SellingPartnerApi\Seller\ShippingV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ShippingV1\Dto\CreateShipmentResult;

final class CreateShipmentResponse extends BaseResponse
{
    /**
     * @param  CreateShipmentResult  $payload The payload schema for the createShipment operation.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly CreateShipmentResult $payload,
        public readonly array $errors,
    ) {
    }
}
