<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class ItemInput extends Dto
{
    /**
     * @param  string  $labelOwner  Specifies who will label the items. Options include `AMAZON` and `SELLER`.
     * @param  string  $msku  The merchant SKU.
     * @param  string  $prepOwner  In some situations, special preparations are required for items and this field reflects the owner of the preparations. Options include `AMAZON` or `SELLER`.
     * @param  int  $quantity  The number of units of the specified MSKU that will be shipped.
     * @param  ?string  $expiration  The expiration date of the MSKU in ISO 8601 format. The same MSKU with different expiration dates cannot go into the same box.
     * @param  ?string  $manufacturingLotCode  The manufacturing lot code.
     */
    public function __construct(
        public readonly string $labelOwner,
        public readonly string $msku,
        public readonly string $prepOwner,
        public readonly int $quantity,
        public readonly ?string $expiration = null,
        public readonly ?string $manufacturingLotCode = null,
    ) {
    }
}
