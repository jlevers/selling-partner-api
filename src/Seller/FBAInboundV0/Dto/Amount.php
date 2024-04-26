<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use SellingPartnerApi\Dto;

final class Amount extends Dto
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
