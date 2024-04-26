<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\ShippingV2\Dto\PurchaseShipmentResult;

final class PurchaseShipmentResponse extends Response
{
    /**
     * @param  ?PurchaseShipmentResult  $payload  The payload for the purchaseShipment operation.
     */
    public function __construct(
        public readonly ?PurchaseShipmentResult $payload = null,
    ) {
    }
}
