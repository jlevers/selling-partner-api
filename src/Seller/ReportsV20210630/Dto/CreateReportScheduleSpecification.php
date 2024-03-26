<?php

namespace SellingPartnerApi\Seller\ReportsV20210630\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CreateReportScheduleSpecification extends BaseDto
{
    /**
     * @param  string  $reportType  The report type. Refer to [Report Type Values](https://developer-docs.amazon.com/sp-api/docs/report-type-values) for more information.
     * @param  string[]  $marketplaceIds  A list of marketplace identifiers for the report.
     * @param  string  $period  One of a set of predefined ISO 8601 periods that specifies how often a report should be created.
     * @param  ?string[]  $reportOptions  Additional information passed to reports. This varies by report type.
     * @param  ?DateTime  $nextReportCreationTime  The date and time when the schedule will create its next report, in ISO 8601 date time format.
     */
    public function __construct(
        public readonly string $reportType,
        public readonly array $marketplaceIds,
        public readonly string $period,
        public readonly ?array $reportOptions = null,
        public readonly ?\DateTime $nextReportCreationTime = null,
    ) {
    }
}
