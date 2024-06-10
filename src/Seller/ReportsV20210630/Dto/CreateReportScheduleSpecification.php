<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ReportsV20210630\Dto;

use SellingPartnerApi\Dto;

final class CreateReportScheduleSpecification extends Dto
{
    /**
     * @param  string  $reportType  The report type. Refer to [Report Type Values](https://developer-docs.amazon.com/sp-api/docs/report-type-values) for more information.
     * @param  string[]  $marketplaceIds  A list of marketplace identifiers for the report.
     * @param  string  $period  One of a set of predefined <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> periods that specifies how often a report should be created.
     * @param  ?string[]  $reportOptions  Additional information passed to reports. This varies by report type.
     * @param  ?\DateTimeInterface  $nextReportCreationTime  The date and time when the schedule will create its next report, in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> date time format.
     */
    public function __construct(
        public readonly string $reportType,
        public readonly array $marketplaceIds,
        public readonly string $period,
        public readonly ?array $reportOptions = null,
        public readonly ?\DateTimeInterface $nextReportCreationTime = null,
    ) {
    }
}
