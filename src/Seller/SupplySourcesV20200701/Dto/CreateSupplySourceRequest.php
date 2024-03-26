<?php

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CreateSupplySourceRequest extends BaseDto
{
    /**
     * @param  string  $supplySourceCode  The seller-provided unique supply source code.
     * @param  string  $alias  The custom alias for this supply source
     * @param  Address  $address  A physical address.
     */
    public function __construct(
        public readonly string $supplySourceCode,
        public readonly string $alias,
        public readonly Address $address,
    ) {
    }
}
