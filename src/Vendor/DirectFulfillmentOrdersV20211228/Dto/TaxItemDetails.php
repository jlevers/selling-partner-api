<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Dto;

use SellingPartnerApi\Dto;

final class TaxItemDetails extends Dto
{
    protected static array $complexArrayTypes = ['taxLineItem' => [TaxDetails::class]];

    /**
     * @param  TaxDetails[]  $taxLineItem  A list of tax line items.
     */
    public function __construct(
        public readonly ?array $taxLineItem = null,
    ) {
    }
}
