<?php

namespace SellingPartnerApi\Seller\ReportsV20210630\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ReportsV20210630\Dto\ReportSchedule;

final class ReportScheduleList extends BaseResponse
{
    protected static array $complexArrayTypes = ['reportSchedules' => [ReportSchedule::class]];

    /**
     * @param  ReportSchedule[]  $reportSchedules
     */
    public function __construct(
        public readonly ?array $reportSchedules = null,
    ) {
    }
}
