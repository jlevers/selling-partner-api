<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Money extends BaseDto
{
    protected static array $attributeMap = ['currencyCode' => 'CurrencyCode', 'amount' => 'Amount'];

    /**
     * @param  ?string  $currencyCode  The three-digit currency code. In ISO 4217 format.
     * @param  ?string  $amount  The currency amount.
     */
    public function __construct(
        public readonly ?string $currencyCode = null,
        public readonly ?string $amount = null,
    ) {
    }
}
