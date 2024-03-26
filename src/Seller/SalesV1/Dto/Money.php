<?php

namespace SellingPartnerApi\Seller\SalesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Money extends BaseDto
{
    /**
     * @param  string  $currencyCode  Three-digit currency code. In ISO 4217 format.
     * @param  string  $amount  A decimal number with no loss of precision. Useful when precision loss is unnaceptable, as with currencies. Follows RFC7159 for number representation.
     */
    public function __construct(
        public readonly string $currencyCode,
        public readonly string $amount,
    ) {
    }
}
