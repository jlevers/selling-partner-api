<?php

namespace SellingPartnerApi\Seller\SellersV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\SellersV1\Responses\GetMarketplaceParticipationsResponse;

/**
 * getMarketplaceParticipations
 */
class GetMarketplaceParticipations extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/sellers/v1/marketplaceParticipations';
    }

    public function createDtoFromResponse(Response $response): GetMarketplaceParticipationsResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 403, 404, 413, 415, 429, 500, 503 => GetMarketplaceParticipationsResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
