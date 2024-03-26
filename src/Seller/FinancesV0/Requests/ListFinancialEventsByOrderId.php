<?php

namespace SellingPartnerApi\Seller\FinancesV0\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\FinancesV0\Responses\ListFinancialEventsResponse;

/**
 * listFinancialEventsByOrderId
 */
class ListFinancialEventsByOrderId extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $orderId  An Amazon-defined order identifier, in 3-7-7 format.
     * @param  ?int  $maxResultsPerPage  The maximum number of results to return per page. If the response exceeds the maximum number of transactions or 10 MB, the API responds with 'InvalidInput'.
     * @param  ?string  $nextToken  A string token returned in the response of your previous request.
     */
    public function __construct(
        protected string $orderId,
        protected ?int $maxResultsPerPage = null,
        protected ?string $nextToken = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['MaxResultsPerPage' => $this->maxResultsPerPage, 'NextToken' => $this->nextToken]);
    }

    public function resolveEndpoint(): string
    {
        return "/finances/v0/orders/{$this->orderId}/financialEvents";
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
