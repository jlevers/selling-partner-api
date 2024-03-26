<?php

namespace SellingPartnerApi\Seller\ShippingV2\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\ShippingV2\Responses\ErrorList;
use SellingPartnerApi\Seller\ShippingV2\Responses\GetTrackingResponse;

/**
 * getTracking
 */
class GetTracking extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $trackingId  A carrier-generated tracking identifier originally returned by the purchaseShipment operation.
     * @param  string  $carrierId  A carrier identifier originally returned by the getRates operation for the selected rate.
     */
    public function __construct(
        protected string $trackingId,
        protected string $carrierId,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['trackingId' => $this->trackingId, 'carrierId' => $this->carrierId]);
    }

    public function resolveEndpoint(): string
    {
        return '/shipping/v2/tracking';
    }

    public function createDtoFromResponse(Response $response): GetTrackingResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => GetTrackingResponse::class,
            400, 401, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
