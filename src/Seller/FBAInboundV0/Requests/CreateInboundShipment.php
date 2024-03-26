<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\FBAInboundV0\Dto\InboundShipmentRequest;
use SellingPartnerApi\Seller\FBAInboundV0\Responses\InboundShipmentResponse;

/**
 * createInboundShipment
 */
class CreateInboundShipment extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $shipmentId  A shipment identifier originally returned by the createInboundShipmentPlan operation.
     * @param  InboundShipmentRequest  $inboundShipmentRequest  The request schema for an inbound shipment.
     */
    public function __construct(
        protected string $shipmentId,
        public InboundShipmentRequest $inboundShipmentRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/fba/inbound/v0/shipments/{$this->shipmentId}";
    }

    public function createDtoFromResponse(Response $response): InboundShipmentResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => InboundShipmentResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->inboundShipmentRequest->toArray();
    }
}
