<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\FBAInboundV0\Responses\GetShipmentItemsResponse;

/**
 * getShipmentItems
 */
class GetShipmentItems extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $queryType  Indicates whether items are returned using a date range (by providing the LastUpdatedAfter and LastUpdatedBefore parameters), or using NextToken, which continues returning items specified in a previous request.
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace where the product would be stored.
     * @param  ?DateTime  $lastUpdatedAfter  A date used for selecting inbound shipment items that were last updated after (or at) a specified time. The selection includes updates made by Amazon and by the seller.
     * @param  ?DateTime  $lastUpdatedBefore  A date used for selecting inbound shipment items that were last updated before (or at) a specified time. The selection includes updates made by Amazon and by the seller.
     * @param  ?string  $nextToken  A string token returned in the response to your previous request.
     */
    public function __construct(
        protected string $queryType,
        protected string $marketplaceId,
        protected ?\DateTime $lastUpdatedAfter = null,
        protected ?\DateTime $lastUpdatedBefore = null,
        protected ?string $nextToken = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'QueryType' => $this->queryType,
            'MarketplaceId' => $this->marketplaceId,
            'LastUpdatedAfter' => $this->lastUpdatedAfter?->format(\DateTime::RFC3339),
            'LastUpdatedBefore' => $this->lastUpdatedBefore?->format(\DateTime::RFC3339),
            'NextToken' => $this->nextToken,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return '/fba/inbound/v0/shipmentItems';
    }

    public function createDtoFromResponse(Response $response): GetShipmentItemsResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => GetShipmentItemsResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
