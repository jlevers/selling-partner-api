<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Dto;

use SellingPartnerApi\Dto;

final class TaxDetails extends Dto
{
    /**
     * @param  Money  $taxAmount  An amount of money, including units in the form of currency.
     * @param  ?string  $taxRate  A decimal number with no loss of precision. Useful when precision loss is unacceptable, as with currencies. Follows RFC7159 for number representation.
     * @param  ?Money  $taxableAmount  An amount of money, including units in the form of currency.
     * @param  ?string  $type  Tax type.
     */
    public function __construct(
        public Money $taxAmount,
        public ?string $taxRate = null,
        public ?Money $taxableAmount = null,
        public ?string $type = null,
    ) {}
}
