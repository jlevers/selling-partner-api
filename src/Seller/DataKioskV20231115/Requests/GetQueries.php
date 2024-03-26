<?php

namespace SellingPartnerApi\Seller\DataKioskV20231115\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\DataKioskV20231115\Responses\ErrorList;
use SellingPartnerApi\Seller\DataKioskV20231115\Responses\GetQueriesResponse;

/**
 * getQueries
 */
class GetQueries extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  ?array  $processingStatuses  A list of processing statuses used to filter queries.
     * @param  ?int  $pageSize  The maximum number of queries to return in a single call.
     * @param  ?DateTime  $createdSince  The earliest query creation date and time for queries to include in the response, in ISO 8601 date time format. The default is 90 days ago.
     * @param  ?DateTime  $createdUntil  The latest query creation date and time for queries to include in the response, in ISO 8601 date time format. The default is the time of the `getQueries` request.
     * @param  ?string  $paginationToken  A token to fetch a certain page of results when there are multiple pages of results available. The value of this token is fetched from the `pagination.nextToken` field returned in the `GetQueriesResponse` object. All other parameters must be provided with the same values that were provided with the request that generated this token, with the exception of `pageSize` which can be modified between calls to `getQueries`. In the absence of this token value, `getQueries` returns the first page of results.
     */
    public function __construct(
        protected ?array $processingStatuses = null,
        protected ?int $pageSize = null,
        protected ?\DateTime $createdSince = null,
        protected ?\DateTime $createdUntil = null,
        protected ?string $paginationToken = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'processingStatuses' => $this->processingStatuses,
            'pageSize' => $this->pageSize,
            'createdSince' => $this->createdSince?->format(\DateTime::RFC3339),
            'createdUntil' => $this->createdUntil?->format(\DateTime::RFC3339),
            'paginationToken' => $this->paginationToken,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return '/dataKiosk/2023-11-15/queries';
    }

    public function createDtoFromResponse(Response $response): GetQueriesResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => GetQueriesResponse::class,
            400, 401, 403, 404, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
