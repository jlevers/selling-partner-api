<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Dto;

use SellingPartnerApi\Dto;

final class TaxDetails extends Dto
{
    protected static array $complexArrayTypes = ['taxLineItem' => [TaxDetails::class]];

    /**
     * @param  TaxDetails[]|null  $taxLineItem  A list of tax line items.
     */
    public function __construct(
        public readonly ?array $taxLineItem = null,
    ) {
    }
}
