<?php

namespace SellingPartnerApi\Seller\FBAInventoryV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\FBAInventoryV1\Responses\GetInventorySummariesResponse;

/**
 * getInventorySummaries
 */
class GetInventorySummaries extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $granularityType  The granularity type for the inventory aggregation level.
     * @param  string  $granularityId  The granularity ID for the inventory aggregation level.
     * @param  array  $marketplaceIds  The marketplace ID for the marketplace for which to return inventory summaries.
     * @param  ?bool  $details  true to return inventory summaries with additional summarized inventory details and quantities. Otherwise, returns inventory summaries only (default value).
     * @param  ?DateTime  $startDateTime  A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected.
     * @param  ?array  $sellerSkus  A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs.
     * @param  ?string  $sellerSku  A single seller SKU used for querying the specified seller SKU inventory summaries.
     * @param  ?string  $nextToken  String token returned in the response of your previous request. The string token will expire 30 seconds after being created.
     */
    public function __construct(
        protected string $granularityType,
        protected string $granularityId,
        protected array $marketplaceIds,
        protected ?bool $details = null,
        protected ?\DateTime $startDateTime = null,
        protected ?array $sellerSkus = null,
        protected ?string $sellerSku = null,
        protected ?string $nextToken = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'granularityType' => $this->granularityType,
            'granularityId' => $this->granularityId,
            'marketplaceIds' => $this->marketplaceIds,
            'details' => $this->details,
            'startDateTime' => $this->startDateTime?->format(\DateTime::RFC3339),
            'sellerSkus' => $this->sellerSkus,
            'sellerSku' => $this->sellerSku,
            'nextToken' => $this->nextToken,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return '/fba/inventory/v1/summaries';
    }

    public function createDtoFromResponse(Response $response): GetInventorySummariesResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 403, 404, 429, 500, 503 => GetInventorySummariesResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
