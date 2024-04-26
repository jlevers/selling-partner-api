<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class BoxContent extends Dto
{
    /**
     * @param  string  $labelOwner  Specifies who will label the items. Options include `AMAZON` and `SELLER`.
     * @param  string  $msku  The merchant SKU, a merchant-supplied identifier for a specific SKU.
     * @param  string  $prepOwner  In some situations, special preparations are required for items and this field reflects the owner of the preparations. Options include `AMAZON` or `SELLER`.
     * @param  int  $quantityInBox  The number of units of the given MSKU in the box.
     * @param  ?string  $expiration  The date in ISO 8601 format for when the MSKU expires.
     * @param  ?string  $manufacturingLotCode  The manufacturing lot code.
     */
    public function __construct(
        public readonly string $labelOwner,
        public readonly string $msku,
        public readonly string $prepOwner,
        public readonly int $quantityInBox,
        public readonly ?string $expiration = null,
        public readonly ?string $manufacturingLotCode = null,
    ) {
    }
}
