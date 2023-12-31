<?php

namespace SellingPartnerApi\Seller\ShippingV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ShippingV1\Dto\PurchaseLabelsResult;

final class PurchaseLabelsResponse extends BaseResponse
{
    /**
     * @param  PurchaseLabelsResult  $payload The payload schema for the purchaseLabels operation.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly PurchaseLabelsResult $payload,
        public readonly array $errors,
    ) {
    }
}
