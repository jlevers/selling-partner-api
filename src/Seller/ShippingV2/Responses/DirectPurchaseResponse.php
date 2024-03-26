<?php

namespace SellingPartnerApi\Seller\ShippingV2\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ShippingV2\Dto\DirectPurchaseResult;

final class DirectPurchaseResponse extends BaseResponse
{
    /**
     * @param  ?DirectPurchaseResult  $payload  The payload for the directPurchaseShipment operation.
     */
    public function __construct(
        public readonly ?DirectPurchaseResult $payload = null,
    ) {
    }
}
