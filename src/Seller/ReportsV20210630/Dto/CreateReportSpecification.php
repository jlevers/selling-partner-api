<?php

namespace SellingPartnerApi\Seller\ReportsV20210630\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CreateReportSpecification extends BaseDto
{
    /**
     * @param  string  $reportType The report type. Refer to [Report Type Values](https://developer-docs.amazon.com/sp-api/docs/report-type-values) for more information.
     * @param  string[]  $marketplaceIds A list of marketplace identifiers. The report document's contents will contain data for all of the specified marketplaces, unless the report type indicates otherwise.
     * @param  array  $reportOptions Additional information passed to reports. This varies by report type.
     * @param  string  $dataStartTime The start of a date and time range, in ISO 8601 date time format, used for selecting the data to report. The default is now. The value must be prior to or equal to the current date and time. Not all report types make use of this.
     * @param  string  $dataEndTime The end of a date and time range, in ISO 8601 date time format, used for selecting the data to report. The default is now. The value must be prior to or equal to the current date and time. Not all report types make use of this.
     */
    public function __construct(
        public readonly string $reportType,
        public readonly array $marketplaceIds,
        public readonly ?array $reportOptions = null,
        public readonly ?string $dataStartTime = null,
        public readonly ?string $dataEndTime = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
