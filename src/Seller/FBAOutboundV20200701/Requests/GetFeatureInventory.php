<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Responses\GetFeatureInventoryResponse;

/**
 * getFeatureInventory
 */
class GetFeatureInventory extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $featureName  The name of the feature for which to return a list of eligible inventory.
     * @param  string  $marketplaceId  The marketplace for which to return a list of the inventory that is eligible for the specified feature.
     * @param  ?string  $nextToken  A string token returned in the response to your previous request that is used to return the next response page. A value of null will return the first page.
     */
    public function __construct(
        protected string $featureName,
        protected string $marketplaceId,
        protected ?string $nextToken = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['marketplaceId' => $this->marketplaceId, 'nextToken' => $this->nextToken]);
    }

    public function resolveEndpoint(): string
    {
        return "/fba/outbound/2020-07-01/features/inventory/{$this->featureName}";
    }

    public function createDtoFromResponse(Response $response): GetFeatureInventoryResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => GetFeatureInventoryResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
