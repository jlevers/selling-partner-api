<?php

namespace SellingPartnerApi\Seller\ReportsV20210630\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class Report extends BaseResponse
{
    /**
     * @param  string  $reportId The identifier for the report. This identifier is unique only in combination with a seller ID.
     * @param  string  $reportType The report type. Refer to [Report Type Values](https://developer-docs.amazon.com/sp-api/docs/report-type-values) for more information.
     * @param  string  $createdTime The date and time when the report was created.
     * @param  string  $processingStatus The processing status of the report.
     * @param  string[]  $marketplaceIds A list of marketplace identifiers for the report.
     * @param  string  $dataStartTime The start of a date and time range used for selecting the data to report.
     * @param  string  $dataEndTime The end of a date and time range used for selecting the data to report.
     * @param  string  $reportScheduleId The identifier of the report schedule that created this report (if any). This identifier is unique only in combination with a seller ID.
     * @param  string  $processingStartTime The date and time when the report processing started, in ISO 8601 date time format.
     * @param  string  $processingEndTime The date and time when the report processing completed, in ISO 8601 date time format.
     * @param  string  $reportDocumentId The identifier for the report document. Pass this into the getReportDocument operation to get the information you will need to retrieve the report document's contents.
     */
    public function __construct(
        public readonly string $reportId,
        public readonly string $reportType,
        public readonly string $createdTime,
        public readonly string $processingStatus,
        public readonly ?array $marketplaceIds = null,
        public readonly ?string $dataStartTime = null,
        public readonly ?string $dataEndTime = null,
        public readonly ?string $reportScheduleId = null,
        public readonly ?string $processingStartTime = null,
        public readonly ?string $processingEndTime = null,
        public readonly ?string $reportDocumentId = null,
    ) {
    }
}
