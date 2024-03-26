<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Stop extends BaseDto
{
    /**
     * @param  string  $functionCode  Provide the function code.
     * @param  ?Location  $locationIdentification  Location identifier.
     * @param  ?DateTime  $arrivalTime  Date and time of the arrival of the cargo.
     * @param  ?DateTime  $departureTime  Date and time of the departure of the cargo.
     */
    public function __construct(
        public readonly string $functionCode,
        public readonly ?Location $locationIdentification = null,
        public readonly ?\DateTime $arrivalTime = null,
        public readonly ?\DateTime $departureTime = null,
    ) {
    }
}
