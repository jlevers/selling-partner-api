<?php

namespace SellingPartnerApi\Vendor\InvoicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PaymentTerms extends BaseDto
{
    /**
     * @param  ?string  $type  The payment term type for the invoice.
     * @param  ?string  $discountPercent  A decimal number with no loss of precision. Useful when precision loss is unacceptable, as with currencies. Follows RFC7159 for number representation. <br>**Pattern** : `^-?(0|([1-9]\d*))(\.\d+)?([eE][+-]?\d+)?$`.
     * @param  ?float  $discountDueDays  The number of calendar days from the Base date (Invoice date) until the discount is no longer valid.
     * @param  ?float  $netDueDays  The number of calendar days from the base date (invoice date) until the total amount on the invoice is due.
     */
    public function __construct(
        public readonly ?string $type = null,
        public readonly ?string $discountPercent = null,
        public readonly ?float $discountDueDays = null,
        public readonly ?float $netDueDays = null,
    ) {
    }
}
