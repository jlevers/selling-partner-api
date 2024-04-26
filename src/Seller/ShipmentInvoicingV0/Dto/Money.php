<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShipmentInvoicingV0\Dto;

use SellingPartnerApi\Dto;

final class Money extends Dto
{
    protected static array $attributeMap = ['currencyCode' => 'CurrencyCode', 'amount' => 'Amount'];

    /**
     * @param  ?string  $currencyCode  Three-digit currency code in ISO 4217 format.
     * @param  ?string  $amount  The currency amount.
     */
    public function __construct(
        public readonly ?string $currencyCode = null,
        public readonly ?string $amount = null,
    ) {
    }
}
