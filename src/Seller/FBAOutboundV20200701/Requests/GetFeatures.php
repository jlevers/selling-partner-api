<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Responses\GetFeaturesResponse;

/**
 * getFeatures
 */
class GetFeatures extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $marketplaceId  The marketplace for which to return the list of features.
     */
    public function __construct(
        protected string $marketplaceId,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['marketplaceId' => $this->marketplaceId]);
    }

    public function resolveEndpoint(): string
    {
        return '/fba/outbound/2020-07-01/features';
    }

    public function createDtoFromResponse(Response $response): GetFeaturesResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => GetFeaturesResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
