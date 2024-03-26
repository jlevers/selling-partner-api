<?php

namespace SellingPartnerApi\Seller\ShippingV2\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class CancelShipmentResponse extends BaseResponse
{
    /**
     * @param  ?array[]  $payload  The payload for the cancelShipment operation.
     */
    public function __construct(
        public readonly ?array $payload = null,
    ) {
    }
}
