<?php

namespace SellingPartnerApi\Seller\ShippingV2\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class GetAdditionalInputsResponse extends BaseResponse
{
    /**
     * @param  ?array[]  $payload  The JSON schema to use to provide additional inputs when required to purchase a shipping offering.
     */
    public function __construct(
        public readonly ?array $payload = null,
    ) {
    }
}
