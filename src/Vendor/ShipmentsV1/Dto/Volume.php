<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Volume extends BaseDto
{
    /**
     * @param  string  $unitOfMeasure  The unit of measurement.
     * @param  string  $value  A decimal number with no loss of precision. Useful when precision loss is unacceptable, as with currencies. Follows RFC7159 for number representation. <br>**Pattern** : `^-?(0|([1-9]\d*))(\.\d+)?([eE][+-]?\d+)?$`.
     */
    public function __construct(
        public readonly string $unitOfMeasure,
        public readonly string $value,
    ) {
    }
}
