<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TaxClassification extends BaseDto
{
    /**
     * @param  string  $name The type of tax.
     * @param  string  $value The buyer's tax identifier.
     */
    public function __construct(
        public readonly ?string $name = null,
        public readonly ?string $value = null,
    ) {
    }
}
