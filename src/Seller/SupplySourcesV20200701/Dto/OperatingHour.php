<?php

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OperatingHour extends BaseDto
{
    /**
     * @param  ?string  $startTime  The opening time, ISO 8601 formatted timestamp without date, HH:mm.
     * @param  ?string  $endTime  The closing time, ISO 8601 formatted timestamp without date, HH:mm.
     */
    public function __construct(
        public readonly ?string $startTime = null,
        public readonly ?string $endTime = null,
    ) {
    }
}
