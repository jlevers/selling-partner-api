<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentPaymentV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TaxDetail extends BaseDto
{
    /**
     * @param  string  $taxType  Type of the tax applied.
     * @param  Money  $taxAmount  An amount of money, including units in the form of currency.
     * @param  ?string  $taxRate  A decimal number with no loss of precision. Useful when precision loss is unacceptable, as with currencies. Follows RFC7159 for number representation. <br>**Pattern** : `^-?(0|([1-9]\d*))(\.\d+)?([eE][+-]?\d+)?$`.
     * @param  ?Money  $taxableAmount  An amount of money, including units in the form of currency.
     */
    public function __construct(
        public readonly string $taxType,
        public readonly Money $taxAmount,
        public readonly ?string $taxRate = null,
        public readonly ?Money $taxableAmount = null,
    ) {
    }
}
