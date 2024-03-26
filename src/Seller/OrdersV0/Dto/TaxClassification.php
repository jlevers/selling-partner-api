<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TaxClassification extends BaseDto
{
    protected static array $attributeMap = ['name' => 'Name', 'value' => 'Value'];

    /**
     * @param  ?string  $name  The type of tax.
     * @param  ?string  $value  The buyer's tax identifier.
     */
    public function __construct(
        public readonly ?string $name = null,
        public readonly ?string $value = null,
    ) {
    }
}
