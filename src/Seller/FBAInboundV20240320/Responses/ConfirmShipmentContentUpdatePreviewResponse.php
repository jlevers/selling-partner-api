<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Responses;

use SellingPartnerApi\Response;

final class ConfirmShipmentContentUpdatePreviewResponse extends Response
{
    /**
     * @param  string  $operationId  UUID for the given operation.
     */
    public function __construct(
        public readonly string $operationId,
    ) {
    }
}
