<?php

namespace SellingPartnerApi\Seller\ShippingV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ShippingV1\Dto\PurchaseShipmentResult;

final class PurchaseShipmentResponse extends BaseResponse
{
    /**
     * @param  PurchaseShipmentResult  $payload The payload schema for the purchaseShipment operation.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly PurchaseShipmentResult $payload,
        public readonly array $errors,
    ) {
    }
}
