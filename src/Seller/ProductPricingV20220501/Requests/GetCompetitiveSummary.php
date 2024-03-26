<?php

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\ProductPricingV20220501\Dto\CompetitiveSummaryBatchRequest;
use SellingPartnerApi\Seller\ProductPricingV20220501\Responses\CompetitiveSummaryBatchResponse;
use SellingPartnerApi\Seller\ProductPricingV20220501\Responses\Errors;

/**
 * getCompetitiveSummary
 */
class GetCompetitiveSummary extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  CompetitiveSummaryBatchRequest  $competitiveSummaryBatchRequest  The `competitiveSummary` batch request data.
     */
    public function __construct(
        public CompetitiveSummaryBatchRequest $competitiveSummaryBatchRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/batches/products/pricing/2022-05-01/items/competitiveSummary';
    }

    public function createDtoFromResponse(Response $response): CompetitiveSummaryBatchResponse|Errors
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => CompetitiveSummaryBatchResponse::class,
            400, 403, 404, 429, 500, 503 => Errors::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->competitiveSummaryBatchRequest->toArray();
    }
}
