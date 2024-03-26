<?php

namespace SellingPartnerApi\Seller\ReportsV20210630\Requests;

use Crescat\SaloonSdkGenerator\EmptyResponse;
use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\ReportsV20210630\Responses\ErrorList;

/**
 * cancelReportSchedule
 */
class CancelReportSchedule extends Request
{
    protected Method $method = Method::DELETE;

    /**
     * @param  string  $reportScheduleId  The identifier for the report schedule. This identifier is unique only in combination with a seller ID.
     */
    public function __construct(
        protected string $reportScheduleId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/reports/2021-06-30/schedules/{$this->reportScheduleId}";
    }

    public function createDtoFromResponse(Response $response): EmptyResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => EmptyResponse::class,
            400, 401, 403, 404, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
