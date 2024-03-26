<?php

namespace SellingPartnerApi\Seller\ShippingV2\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\ShippingV2\Responses\CancelShipmentResponse;
use SellingPartnerApi\Seller\ShippingV2\Responses\ErrorList;

/**
 * cancelShipment
 */
class CancelShipment extends Request
{
    protected Method $method = Method::PUT;

    /**
     * @param  string  $shipmentId  The shipment identifier originally returned by the purchaseShipment operation.
     */
    public function __construct(
        protected string $shipmentId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/shipping/v2/shipments/{$this->shipmentId}/cancel";
    }

    public function createDtoFromResponse(Response $response): CancelShipmentResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => CancelShipmentResponse::class,
            400, 401, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
