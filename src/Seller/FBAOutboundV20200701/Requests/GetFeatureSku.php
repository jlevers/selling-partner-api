<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Responses\GetFeatureSkuResponse;

/**
 * getFeatureSKU
 */
class GetFeatureSku extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $featureName  The name of the feature.
     * @param  string  $sellerSku  Used to identify an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.
     * @param  string  $marketplaceId  The marketplace for which to return the count.
     */
    public function __construct(
        protected string $featureName,
        protected string $sellerSku,
        protected string $marketplaceId,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['marketplaceId' => $this->marketplaceId]);
    }

    public function resolveEndpoint(): string
    {
        return "/fba/outbound/2020-07-01/features/inventory/{$this->featureName}/{$this->sellerSku}";
    }

    public function createDtoFromResponse(Response $response): GetFeatureSkuResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => GetFeatureSkuResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
