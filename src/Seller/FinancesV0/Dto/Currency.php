<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use SellingPartnerApi\Dto;

final class Currency extends Dto
{
    protected static array $attributeMap = ['currencyCode' => 'CurrencyCode', 'currencyAmount' => 'CurrencyAmount'];

    /**
     * @param  ?string  $currencyCode  The three-digit currency code in ISO 4217 format.
     * @param  ?float  $currencyAmount
     */
    public function __construct(
        public readonly ?string $currencyCode = null,
        public readonly ?float $currencyAmount = null,
    ) {
    }
}
