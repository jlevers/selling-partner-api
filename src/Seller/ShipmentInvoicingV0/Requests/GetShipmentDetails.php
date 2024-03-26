<?php

namespace SellingPartnerApi\Seller\ShipmentInvoicingV0\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Middleware\RestrictedDataToken;
use SellingPartnerApi\Seller\ShipmentInvoicingV0\Responses\GetShipmentDetailsResponse;

/**
 * getShipmentDetails
 */
class GetShipmentDetails extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $shipmentId  The identifier for the shipment. Get this value from the FBAOutboundShipmentStatus notification. For information about subscribing to notifications, see the [Notifications API Use Case Guide](doc:notifications-api-v1-use-case-guide).
     */
    public function __construct(
        protected string $shipmentId,
    ) {
        $rdtMiddleware = new RestrictedDataToken('/fba/outbound/brazil/v0/shipments/{shipmentId}', 'GET', []);
        $this->middleware()->onRequest($rdtMiddleware);
    }

    public function resolveEndpoint(): string
    {
        return "/fba/outbound/brazil/v0/shipments/{$this->shipmentId}";
    }

    public function createDtoFromResponse(Response $response): GetShipmentDetailsResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 415, 429, 500, 503 => GetShipmentDetailsResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
