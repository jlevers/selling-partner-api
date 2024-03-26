<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class MoneyType extends BaseDto
{
    protected static array $attributeMap = ['currencyCode' => 'CurrencyCode', 'amount' => 'Amount'];

    /**
     * @param  ?string  $currencyCode  The currency code in ISO 4217 format.
     * @param  ?float  $amount  The monetary value.
     */
    public function __construct(
        public readonly ?string $currencyCode = null,
        public readonly ?float $amount = null,
    ) {
    }
}
