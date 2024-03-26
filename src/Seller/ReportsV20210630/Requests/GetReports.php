<?php

namespace SellingPartnerApi\Seller\ReportsV20210630\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\ReportsV20210630\Responses\ErrorList;
use SellingPartnerApi\Seller\ReportsV20210630\Responses\GetReportsResponse;

/**
 * getReports
 */
class GetReports extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  ?array  $reportTypes  A list of report types used to filter reports. Refer to [Report Type Values](https://developer-docs.amazon.com/sp-api/docs/report-type-values) for more information. When reportTypes is provided, the other filter parameters (processingStatuses, marketplaceIds, createdSince, createdUntil) and pageSize may also be provided. Either reportTypes or nextToken is required.
     * @param  ?array  $processingStatuses  A list of processing statuses used to filter reports.
     * @param  ?array  $marketplaceIds  A list of marketplace identifiers used to filter reports. The reports returned will match at least one of the marketplaces that you specify.
     * @param  ?int  $pageSize  The maximum number of reports to return in a single call.
     * @param  ?DateTime  $createdSince  The earliest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is 90 days ago. Reports are retained for a maximum of 90 days.
     * @param  ?DateTime  $createdUntil  The latest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is now.
     * @param  ?string  $nextToken  A string token returned in the response to your previous request. nextToken is returned when the number of results exceeds the specified pageSize value. To get the next page of results, call the getReports operation and include this token as the only parameter. Specifying nextToken with any other parameters will cause the request to fail.
     */
    public function __construct(
        protected ?array $reportTypes = null,
        protected ?array $processingStatuses = null,
        protected ?array $marketplaceIds = null,
        protected ?int $pageSize = null,
        protected ?\DateTime $createdSince = null,
        protected ?\DateTime $createdUntil = null,
        protected ?string $nextToken = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'reportTypes' => $this->reportTypes,
            'processingStatuses' => $this->processingStatuses,
            'marketplaceIds' => $this->marketplaceIds,
            'pageSize' => $this->pageSize,
            'createdSince' => $this->createdSince?->format(\DateTime::RFC3339),
            'createdUntil' => $this->createdUntil?->format(\DateTime::RFC3339),
            'nextToken' => $this->nextToken,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return '/reports/2021-06-30/reports';
    }

    public function createDtoFromResponse(Response $response): GetReportsResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => GetReportsResponse::class,
            400, 401, 403, 404, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
