<?php

namespace SellingPartnerApi\Seller\ShippingV2\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ShippingV2\Dto\GetRatesResult;

final class GetRatesResponse extends BaseResponse
{
    /**
     * @param  ?GetRatesResult  $payload  The payload for the getRates operation.
     */
    public function __construct(
        public readonly ?GetRatesResult $payload = null,
    ) {
    }
}
