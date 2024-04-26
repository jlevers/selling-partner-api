<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\ShippingV2\Dto\GetRatesResult;

final class GetRatesResponse extends Response
{
    /**
     * @param  ?GetRatesResult  $payload  The payload for the getRates operation.
     */
    public function __construct(
        public readonly ?GetRatesResult $payload = null,
    ) {
    }
}
