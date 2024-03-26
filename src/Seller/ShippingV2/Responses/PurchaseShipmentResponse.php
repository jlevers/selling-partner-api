<?php

namespace SellingPartnerApi\Seller\ShippingV2\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ShippingV2\Dto\PurchaseShipmentResult;

final class PurchaseShipmentResponse extends BaseResponse
{
    /**
     * @param  ?PurchaseShipmentResult  $payload  The payload for the purchaseShipment operation.
     */
    public function __construct(
        public readonly ?PurchaseShipmentResult $payload = null,
    ) {
    }
}
