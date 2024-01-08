<?php

namespace SellingPartnerApi\Seller\FinancesV0\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\FinancesV0\Responses\ListFinancialEventsResponse;

/**
 * listFinancialEvents
 */
class ListFinancialEvents extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  ?int  $maxResultsPerPage The maximum number of results to return per page. If the response exceeds the maximum number of transactions or 10 MB, the API responds with 'InvalidInput'.
     * @param  ?string  $postedAfter A date used for selecting financial events posted after (or at) a specified time. The date-time must be no later than two minutes before the request was submitted, in ISO 8601 date time format.
     * @param  ?string  $postedBefore A date used for selecting financial events posted before (but not at) a specified time. The date-time must be later than PostedAfter and no later than two minutes before the request was submitted, in ISO 8601 date time format. If PostedAfter and PostedBefore are more than 180 days apart, no financial events are returned. You must specify the PostedAfter parameter if you specify the PostedBefore parameter. Default: Now minus two minutes.
     * @param  ?string  $nextToken A string token returned in the response of your previous request.
     */
    public function __construct(
        protected ?int $maxResultsPerPage = null,
        protected ?string $postedAfter = null,
        protected ?string $postedBefore = null,
        protected ?string $nextToken = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'maxResultsPerPage' => $this->maxResultsPerPage,
            'postedAfter' => $this->postedAfter,
            'postedBefore' => $this->postedBefore,
            'nextToken' => $this->nextToken,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return '/finances/v0/financialEvents';
    }

    public function createDtoFromResponse(Response $response): ListFinancialEventsResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 403, 404, 429, 500, 503 => ListFinancialEventsResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
