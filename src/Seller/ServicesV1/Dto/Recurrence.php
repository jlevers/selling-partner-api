<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Recurrence extends BaseDto
{
    /**
     * @param  DateTime  $endTime  End time of the recurrence.
     * @param  ?string[]  $daysOfWeek  Days of the week when recurrence is valid. If the schedule is valid every Monday, input will only contain `MONDAY` in the list.
     * @param  int[]|null  $daysOfMonth  Days of the month when recurrence is valid.
     */
    public function __construct(
        public readonly \DateTime $endTime,
        public readonly ?array $daysOfWeek = null,
        public readonly ?array $daysOfMonth = null,
    ) {
    }
}
