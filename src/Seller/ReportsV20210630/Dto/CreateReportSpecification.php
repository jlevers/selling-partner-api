<?php

namespace SellingPartnerApi\Seller\ReportsV20210630\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CreateReportSpecification extends BaseDto
{
    /**
     * @param  string  $reportType  The report type. Refer to [Report Type Values](https://developer-docs.amazon.com/sp-api/docs/report-type-values) for more information.
     * @param  string[]  $marketplaceIds  A list of marketplace identifiers for the report.
     * @param  ?string[]  $reportOptions  Additional information passed to reports. This varies by report type.
     * @param  ?DateTime  $dataStartTime  The start of a date and time range, in ISO 8601 date time format, used for selecting the data to report. The default is now. The value must be prior to or equal to the current date and time. Not all report types make use of this.
     * @param  ?DateTime  $dataEndTime  The end of a date and time range, in ISO 8601 date time format, used for selecting the data to report. The default is now. The value must be prior to or equal to the current date and time. Not all report types make use of this.
     */
    public function __construct(
        public readonly string $reportType,
        public readonly array $marketplaceIds,
        public readonly ?array $reportOptions = null,
        public readonly ?\DateTime $dataStartTime = null,
        public readonly ?\DateTime $dataEndTime = null,
    ) {
    }
}
