<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\InvoicesV1\Dto;

use SellingPartnerApi\Dto;

final class ItemQuantity extends Dto
{
    /**
     * @param  int  $amount  Quantity of an item. This value should not be zero.
     * @param  string  $unitOfMeasure  Unit of measure for the quantity.
     * @param  ?int  $unitSize  The case size, if the unit of measure value is Cases.
     */
    public function __construct(
        public readonly int $amount,
        public readonly string $unitOfMeasure,
        public readonly ?int $unitSize = null,
    ) {
    }
}