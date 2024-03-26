<?php

namespace SellingPartnerApi\Seller\FinancesV0\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\FinancesV0\Responses\ListFinancialEventGroupsResponse;

/**
 * listFinancialEventGroups
 */
class ListFinancialEventGroups extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  ?int  $maxResultsPerPage  The maximum number of results to return per page. If the response exceeds the maximum number of transactions or 10 MB, the API responds with 'InvalidInput'.
     * @param  ?DateTime  $financialEventGroupStartedBefore  A date used for selecting financial event groups that opened before (but not at) a specified date and time, in ISO 8601 format. The date-time  must be later than FinancialEventGroupStartedAfter and no later than two minutes before the request was submitted. If FinancialEventGroupStartedAfter and FinancialEventGroupStartedBefore are more than 180 days apart, no financial event groups are returned.
     * @param  ?DateTime  $financialEventGroupStartedAfter  A date used for selecting financial event groups that opened after (or at) a specified date and time, in ISO 8601 format. The date-time must be no later than two minutes before the request was submitted.
     * @param  ?string  $nextToken  A string token returned in the response of your previous request.
     */
    public function __construct(
        protected ?int $maxResultsPerPage = null,
        protected ?\DateTime $financialEventGroupStartedBefore = null,
        protected ?\DateTime $financialEventGroupStartedAfter = null,
        protected ?string $nextToken = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'MaxResultsPerPage' => $this->maxResultsPerPage,
            'FinancialEventGroupStartedBefore' => $this->financialEventGroupStartedBefore?->format(\DateTime::RFC3339),
            'FinancialEventGroupStartedAfter' => $this->financialEventGroupStartedAfter?->format(\DateTime::RFC3339),
            'NextToken' => $this->nextToken,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return '/finances/v0/financialEventGroups';
    }

    public function createDtoFromResponse(Response $response): ListFinancialEventGroupsResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 403, 404, 429, 500, 503 => ListFinancialEventGroupsResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
