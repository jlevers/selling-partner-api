<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Duration extends BaseDto
{
    /**
     * @param  string  $durationUnit  Unit for duration.
     * @param  int  $durationValue  Value for the duration in terms of the durationUnit.
     */
    public function __construct(
        public readonly string $durationUnit,
        public readonly int $durationValue,
    ) {
    }
}
