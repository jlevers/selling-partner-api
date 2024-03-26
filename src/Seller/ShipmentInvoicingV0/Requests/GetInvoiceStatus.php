<?php

namespace SellingPartnerApi\Seller\ShipmentInvoicingV0\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\ShipmentInvoicingV0\Responses\GetInvoiceStatusResponse;

/**
 * getInvoiceStatus
 */
class GetInvoiceStatus extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $shipmentId  The shipment identifier for the shipment.
     */
    public function __construct(
        protected string $shipmentId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/fba/outbound/brazil/v0/shipments/{$this->shipmentId}/invoice/status";
    }

    public function createDtoFromResponse(Response $response): GetInvoiceStatusResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 415, 429, 500, 503 => GetInvoiceStatusResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
