<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Amount extends BaseDto
{
    protected static array $attributeMap = ['currencyCode' => 'CurrencyCode', 'value' => 'Value'];

    /**
     * @param  string  $currencyCode  The currency code.
     */
    public function __construct(
        public readonly string $currencyCode,
        public readonly float $value,
    ) {
    }
}
