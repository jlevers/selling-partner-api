<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Middleware\RestrictedDataToken;
use SellingPartnerApi\Seller\MerchantFulfillmentV0\Responses\CancelShipmentResponse;

/**
 * cancelShipmentOld
 */
class CancelShipmentOld extends Request
{
    protected Method $method = Method::PUT;

    /**
     * @param  string  $shipmentId  The Amazon-defined shipment identifier for the shipment to cancel.
     */
    public function __construct(
        protected string $shipmentId,
    ) {
        $rdtMiddleware = new RestrictedDataToken('/mfn/v0/shipments/{shipmentId}/cancel', 'PUT', []);
        $this->middleware()->onRequest($rdtMiddleware);
    }

    public function resolveEndpoint(): string
    {
        return "/mfn/v0/shipments/{$this->shipmentId}/cancel";
    }

    public function createDtoFromResponse(Response $response): CancelShipmentResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => CancelShipmentResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
