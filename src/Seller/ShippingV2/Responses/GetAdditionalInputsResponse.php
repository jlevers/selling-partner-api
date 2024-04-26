<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Responses;

use SellingPartnerApi\Response;

final class GetAdditionalInputsResponse extends Response
{
    /**
     * @param  ?array[]  $payload  The JSON schema to use to provide additional inputs when required to purchase a shipping offering.
     */
    public function __construct(
        public readonly ?array $payload = null,
    ) {
    }
}
