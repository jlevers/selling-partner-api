<?php

namespace SellingPartnerApi\Seller\ReplenishmentV20221107\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\ReplenishmentV20221107\Dto\GetSellingPartnerMetricsRequest;
use SellingPartnerApi\Seller\ReplenishmentV20221107\Responses\ErrorList;
use SellingPartnerApi\Seller\ReplenishmentV20221107\Responses\GetSellingPartnerMetricsResponse;

/**
 * getSellingPartnerMetrics
 */
class GetSellingPartnerMetrics extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  GetSellingPartnerMetricsRequest  $getSellingPartnerMetricsRequest  The request body for the `getSellingPartnerMetrics` operation.
     */
    public function __construct(
        public GetSellingPartnerMetricsRequest $getSellingPartnerMetricsRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/replenishment/2022-11-07/sellingPartners/metrics/search';
    }

    public function createDtoFromResponse(Response $response): GetSellingPartnerMetricsResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => GetSellingPartnerMetricsResponse::class,
            400, 401, 403, 404, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->getSellingPartnerMetricsRequest->toArray();
    }
}
