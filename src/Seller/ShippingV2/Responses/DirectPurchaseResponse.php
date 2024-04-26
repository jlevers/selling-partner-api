<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\ShippingV2\Dto\DirectPurchaseResult;

final class DirectPurchaseResponse extends Response
{
    /**
     * @param  ?DirectPurchaseResult  $payload  The payload for the directPurchaseShipment operation.
     */
    public function __construct(
        public readonly ?DirectPurchaseResult $payload = null,
    ) {
    }
}
