<?php

namespace SellingPartnerApi\Seller\EasyShipV20220323\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class UpdatePackageDetails extends BaseDto
{
    /**
     * @param  ScheduledPackageId  $scheduledPackageId  Identifies the scheduled package to be updated.
     * @param  TimeSlot  $packageTimeSlot  A time window to hand over an Easy Ship package to Amazon Logistics.
     */
    public function __construct(
        public readonly ScheduledPackageId $scheduledPackageId,
        public readonly TimeSlot $packageTimeSlot,
    ) {
    }
}
