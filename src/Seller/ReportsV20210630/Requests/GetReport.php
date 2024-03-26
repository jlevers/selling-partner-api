<?php

namespace SellingPartnerApi\Seller\ReportsV20210630\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\ReportsV20210630\Responses\ErrorList;
use SellingPartnerApi\Seller\ReportsV20210630\Responses\Report;

/**
 * getReport
 */
class GetReport extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $reportId  The identifier for the report. This identifier is unique only in combination with a seller ID.
     */
    public function __construct(
        protected string $reportId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/reports/2021-06-30/reports/{$this->reportId}";
    }

    public function createDtoFromResponse(Response $response): Report|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => Report::class,
            400, 401, 403, 404, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
