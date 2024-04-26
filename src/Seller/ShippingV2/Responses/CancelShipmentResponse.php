<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Responses;

use SellingPartnerApi\Response;

final class CancelShipmentResponse extends Response
{
    /**
     * @param  ?array[]  $payload  The payload for the cancelShipment operation.
     */
    public function __construct(
        public readonly ?array $payload = null,
    ) {
    }
}
