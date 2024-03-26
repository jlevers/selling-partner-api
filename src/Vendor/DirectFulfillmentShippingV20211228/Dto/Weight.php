<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Weight extends BaseDto
{
    /**
     * @param  string  $unitOfMeasure  The unit of measurement.
     * @param  string  $value  A decimal number with no loss of precision. Useful when precision loss is unacceptable, as with currencies. Follows RFC7159 for number representation.  <br>**Pattern** : `^-?(0|([1-9]\\d*))(\\.\\d+)?([eE][+-]?\\d+)?$`.
     */
    public function __construct(
        public readonly string $unitOfMeasure,
        public readonly string $value,
    ) {
    }
}
