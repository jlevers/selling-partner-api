<?php

namespace SellingPartnerApi\Seller\ReportsV20210630\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Middleware\RestrictedReport;
use SellingPartnerApi\Seller\ReportsV20210630\Responses\ErrorList;
use SellingPartnerApi\Seller\ReportsV20210630\Responses\ReportDocument;

/**
 * getReportDocument
 */
class GetReportDocument extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $reportDocumentId  The identifier for the report document.
     * @param  string  $reportType  The report type of the report document.
     */
    public function __construct(
        protected string $reportDocumentId,
        protected string $reportType,
    ) {
        $this->middleware()->onRequest(new RestrictedReport);
    }

    public function defaultQuery(): array
    {
        return array_filter(['reportType' => $this->reportType]);
    }

    public function resolveEndpoint(): string
    {
        return "/reports/2021-06-30/documents/{$this->reportDocumentId}";
    }

    public function createDtoFromResponse(Response $response): ReportDocument|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ReportDocument::class,
            400, 401, 403, 404, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
