<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CurrencyAmount extends BaseDto
{
    protected static array $attributeMap = ['currencyCode' => 'CurrencyCode', 'amount' => 'Amount'];

    /**
     * @param  string  $currencyCode  Three-digit currency code in ISO 4217 format.
     * @param  float  $amount  The currency amount.
     */
    public function __construct(
        public readonly string $currencyCode,
        public readonly float $amount,
    ) {
    }
}
