<?php

namespace SellingPartnerApi\Seller\ReportsV20210630\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class ReportSchedule extends BaseResponse
{
    /**
     * @param  string  $reportScheduleId  The identifier for the report schedule. This identifier is unique only in combination with a seller ID.
     * @param  string  $reportType  The report type. Refer to [Report Type Values](https://developer-docs.amazon.com/sp-api/docs/report-type-values) for more information.
     * @param  string  $period  An ISO 8601 period value that indicates how often a report should be created.
     * @param  ?string[]  $marketplaceIds  A list of marketplace identifiers for the report.
     * @param  ?string[]  $reportOptions  Additional information passed to reports. This varies by report type.
     * @param  ?DateTime  $nextReportCreationTime  The date and time when the schedule will create its next report, in ISO 8601 date time format.
     */
    public function __construct(
        public readonly string $reportScheduleId,
        public readonly string $reportType,
        public readonly string $period,
        public readonly ?array $marketplaceIds = null,
        public readonly ?array $reportOptions = null,
        public readonly ?\DateTime $nextReportCreationTime = null,
    ) {
    }
}
