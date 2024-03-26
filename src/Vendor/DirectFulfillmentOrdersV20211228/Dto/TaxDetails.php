<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TaxDetails extends BaseDto
{
    /**
     * @param  Money  $taxAmount  An amount of money, including units in the form of currency.
     * @param  ?string  $taxRate  A decimal number with no loss of precision. Useful when precision loss is unacceptable, as with currencies. Follows RFC7159 for number representation.
     * @param  ?Money  $taxableAmount  An amount of money, including units in the form of currency.
     * @param  ?string  $type  Tax type.
     */
    public function __construct(
        public readonly Money $taxAmount,
        public readonly ?string $taxRate = null,
        public readonly ?Money $taxableAmount = null,
        public readonly ?string $type = null,
    ) {
    }
}
