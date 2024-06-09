<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\ShippingV2\Dto\OneClickShipmentResult;

final class OneClickShipmentResponse extends Response
{
    /**
     * @param  ?OneClickShipmentResult  $payload  The payload for the OneClickShipment API.
     */
    public function __construct(
        public readonly ?OneClickShipmentResult $payload = null,
    ) {
    }
}
