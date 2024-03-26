<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Responses\GetPackageTrackingDetailsResponse;

/**
 * getPackageTrackingDetails
 */
class GetPackageTrackingDetails extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  int  $packageNumber  The unencrypted package identifier returned by the getFulfillmentOrder operation.
     */
    public function __construct(
        protected int $packageNumber,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['packageNumber' => $this->packageNumber]);
    }

    public function resolveEndpoint(): string
    {
        return '/fba/outbound/2020-07-01/tracking';
    }

    public function createDtoFromResponse(Response $response): GetPackageTrackingDetailsResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => GetPackageTrackingDetailsResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
