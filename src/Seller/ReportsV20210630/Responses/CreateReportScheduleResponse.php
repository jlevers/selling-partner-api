<?php

namespace SellingPartnerApi\Seller\ReportsV20210630\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class CreateReportScheduleResponse extends BaseResponse
{
    /**
     * @param  string  $reportScheduleId  The identifier for the report schedule. This identifier is unique only in combination with a seller ID.
     */
    public function __construct(
        public readonly string $reportScheduleId,
    ) {
    }
}
