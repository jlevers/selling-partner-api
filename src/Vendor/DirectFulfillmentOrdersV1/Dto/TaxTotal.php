<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TaxTotal extends BaseDto
{
    protected static array $complexArrayTypes = ['taxLineItem' => [Object::class]];

    /**
     * @param  object[]  $taxLineItem A list of tax line items.
     */
    public function __construct(
        public readonly ?array $taxLineItem = null,
    ) {
    }
}
