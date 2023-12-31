<?php

namespace SellingPartnerApi\Seller\ShipmentInvoicingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Money extends BaseDto
{
    /**
     * @param  string  $currencyCode Three-digit currency code in ISO 4217 format.
     * @param  string  $amount The currency amount.
     */
    public function __construct(
        public readonly string $currencyCode,
        public readonly string $amount,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
