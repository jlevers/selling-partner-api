<?php

namespace SellingPartnerApi\Seller\ShipmentInvoicingV0\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\ShipmentInvoicingV0\Dto\SubmitInvoiceRequest;
use SellingPartnerApi\Seller\ShipmentInvoicingV0\Responses\SubmitInvoiceResponse;

/**
 * submitInvoice
 */
class SubmitInvoice extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $shipmentId  The identifier for the shipment.
     * @param  SubmitInvoiceRequest  $submitInvoiceRequest  The request schema for the submitInvoice operation.
     */
    public function __construct(
        protected string $shipmentId,
        public SubmitInvoiceRequest $submitInvoiceRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/fba/outbound/brazil/v0/shipments/{$this->shipmentId}/invoice";
    }

    public function createDtoFromResponse(Response $response): SubmitInvoiceResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 415, 429, 500, 503 => SubmitInvoiceResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->submitInvoiceRequest->toArray();
    }
}
