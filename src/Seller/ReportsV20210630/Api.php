<?php

namespace SellingPartnerApi\Seller\ReportsV20210630;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\ReportsV20210630\Dto\CreateReportScheduleSpecification;
use SellingPartnerApi\Seller\ReportsV20210630\Dto\CreateReportSpecification;
use SellingPartnerApi\Seller\ReportsV20210630\Requests\CancelReport;
use SellingPartnerApi\Seller\ReportsV20210630\Requests\CancelReportSchedule;
use SellingPartnerApi\Seller\ReportsV20210630\Requests\CreateReport;
use SellingPartnerApi\Seller\ReportsV20210630\Requests\CreateReportSchedule;
use SellingPartnerApi\Seller\ReportsV20210630\Requests\GetReport;
use SellingPartnerApi\Seller\ReportsV20210630\Requests\GetReportDocument;
use SellingPartnerApi\Seller\ReportsV20210630\Requests\GetReports;
use SellingPartnerApi\Seller\ReportsV20210630\Requests\GetReportSchedule;
use SellingPartnerApi\Seller\ReportsV20210630\Requests\GetReportSchedules;

class Api extends BaseResource
{
    /**
     * @param  ?array  $reportTypes  A list of report types used to filter reports. Refer to [Report Type Values](https://developer-docs.amazon.com/sp-api/docs/report-type-values) for more information. When reportTypes is provided, the other filter parameters (processingStatuses, marketplaceIds, createdSince, createdUntil) and pageSize may also be provided. Either reportTypes or nextToken is required.
     * @param  ?array  $processingStatuses  A list of processing statuses used to filter reports.
     * @param  ?array  $marketplaceIds  A list of marketplace identifiers used to filter reports. The reports returned will match at least one of the marketplaces that you specify.
     * @param  ?int  $pageSize  The maximum number of reports to return in a single call.
     * @param  ?\DateTimeInterface  $createdSince  The earliest report creation date and time for reports to include in the response, in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> date time format. The default is 90 days ago. Reports are retained for a maximum of 90 days.
     * @param  ?\DateTimeInterface  $createdUntil  The latest report creation date and time for reports to include in the response, in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> date time format. The default is now.
     * @param  ?string  $nextToken  A string token returned in the response to your previous request. `nextToken` is returned when the number of results exceeds the specified `pageSize` value. To get the next page of results, call the `getReports` operation and include this token as the only parameter. Specifying `nextToken` with any other parameters will cause the request to fail.
     */
    public function getReports(
        ?array $reportTypes = null,
        ?array $processingStatuses = null,
        ?array $marketplaceIds = null,
        ?int $pageSize = null,
        ?\DateTimeInterface $createdSince = null,
        ?\DateTimeInterface $createdUntil = null,
        ?string $nextToken = null,
    ): Response {
        $request = new GetReports($reportTypes, $processingStatuses, $marketplaceIds, $pageSize, $createdSince, $createdUntil, $nextToken);

        return $this->connector->send($request);
    }

    /**
     * @param  CreateReportSpecification  $createReportSpecification  Information required to create the report.
     */
    public function createReport(CreateReportSpecification $createReportSpecification): Response
    {
        $request = new CreateReport($createReportSpecification);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $reportId  The identifier for the report. This identifier is unique only in combination with a seller ID.
     */
    public function getReport(string $reportId): Response
    {
        $request = new GetReport($reportId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $reportId  The identifier for the report. This identifier is unique only in combination with a seller ID.
     */
    public function cancelReport(string $reportId): Response
    {
        $request = new CancelReport($reportId);

        return $this->connector->send($request);
    }

    /**
     * @param  array  $reportTypes  A list of report types used to filter report schedules. Refer to [Report Type Values](https://developer-docs.amazon.com/sp-api/docs/report-type-values) for more information.
     */
    public function getReportSchedules(array $reportTypes): Response
    {
        $request = new GetReportSchedules($reportTypes);

        return $this->connector->send($request);
    }

    /**
     * @param  CreateReportScheduleSpecification  $createReportScheduleSpecification  Information required to create the report schedule.
     */
    public function createReportSchedule(CreateReportScheduleSpecification $createReportScheduleSpecification): Response
    {
        $request = new CreateReportSchedule($createReportScheduleSpecification);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $reportScheduleId  The identifier for the report schedule. This identifier is unique only in combination with a seller ID.
     */
    public function getReportSchedule(string $reportScheduleId): Response
    {
        $request = new GetReportSchedule($reportScheduleId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $reportScheduleId  The identifier for the report schedule. This identifier is unique only in combination with a seller ID.
     */
    public function cancelReportSchedule(string $reportScheduleId): Response
    {
        $request = new CancelReportSchedule($reportScheduleId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $reportDocumentId  The identifier for the report document.
     * @param  string  $reportType  The report type of the report document.
     */
    public function getReportDocument(string $reportDocumentId, string $reportType): Response
    {
        $request = new GetReportDocument($reportDocumentId, $reportType);

        return $this->connector->send($request);
    }
}
