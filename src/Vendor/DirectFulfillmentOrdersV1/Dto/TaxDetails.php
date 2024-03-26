<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TaxDetails extends BaseDto
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
