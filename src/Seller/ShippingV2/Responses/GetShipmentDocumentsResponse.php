<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\ShippingV2\Dto\GetShipmentDocumentsResult;

final class GetShipmentDocumentsResponse extends Response
{
    /**
     * @param  ?GetShipmentDocumentsResult  $payload  The payload for the getShipmentDocuments operation.
     */
    public function __construct(
        public readonly ?GetShipmentDocumentsResult $payload = null,
    ) {
    }
}
