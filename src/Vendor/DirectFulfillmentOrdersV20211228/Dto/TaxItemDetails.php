<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TaxItemDetails extends BaseDto
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
