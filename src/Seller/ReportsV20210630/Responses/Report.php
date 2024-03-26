<?php

namespace SellingPartnerApi\Seller\ReportsV20210630\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class Report extends BaseResponse
{
    /**
     * @param  string  $reportId  The identifier for the report. This identifier is unique only in combination with a seller ID.
     * @param  string  $reportType  The report type. Refer to [Report Type Values](https://developer-docs.amazon.com/sp-api/docs/report-type-values) for more information.
     * @param  DateTime  $createdTime  The date and time when the report was created.
     * @param  string  $processingStatus  The processing status of the report.
     * @param  ?string[]  $marketplaceIds  A list of marketplace identifiers for the report.
     * @param  ?DateTime  $dataStartTime  The start of a date and time range used for selecting the data to report.
     * @param  ?DateTime  $dataEndTime  The end of a date and time range used for selecting the data to report.
     * @param  ?string  $reportScheduleId  The identifier of the report schedule that created this report (if any). This identifier is unique only in combination with a seller ID.
     * @param  ?DateTime  $processingStartTime  The date and time when the report processing started, in ISO 8601 date time format.
     * @param  ?DateTime  $processingEndTime  The date and time when the report processing completed, in ISO 8601 date time format.
     * @param  ?string  $reportDocumentId  The identifier for the report document. Pass this into the getReportDocument operation to get the information you will need to retrieve the report document's contents.
     */
    public function __construct(
        public readonly string $reportId,
        public readonly string $reportType,
        public readonly \DateTime $createdTime,
        public readonly string $processingStatus,
        public readonly ?array $marketplaceIds = null,
        public readonly ?\DateTime $dataStartTime = null,
        public readonly ?\DateTime $dataEndTime = null,
        public readonly ?string $reportScheduleId = null,
        public readonly ?\DateTime $processingStartTime = null,
        public readonly ?\DateTime $processingEndTime = null,
        public readonly ?string $reportDocumentId = null,
    ) {
    }
}
