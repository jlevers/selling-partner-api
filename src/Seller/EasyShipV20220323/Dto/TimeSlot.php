<?php

namespace SellingPartnerApi\Seller\EasyShipV20220323\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TimeSlot extends BaseDto
{
    /**
     * @param  string  $slotId  A string of up to 255 characters.
     * @param  ?DateTime  $startTime  A datetime value in ISO 8601 format.
     * @param  ?DateTime  $endTime  A datetime value in ISO 8601 format.
     * @param  ?string  $handoverMethod  Identifies the method by which a seller will hand a package over to Amazon Logistics.
     */
    public function __construct(
        public readonly string $slotId,
        public readonly ?\DateTime $startTime = null,
        public readonly ?\DateTime $endTime = null,
        public readonly ?string $handoverMethod = null,
    ) {
    }
}
