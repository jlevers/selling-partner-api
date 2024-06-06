<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class ClientReferenceDetail extends Dto
{
    /**
     * @param  string  $clientReferenceType  Client Reference type.
     * @param  string  $clientReferenceId  The Client Reference Id.
     */
    public function __construct(
        public readonly string $clientReferenceType,
        public readonly string $clientReferenceId,
    ) {
    }
}
