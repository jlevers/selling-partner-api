<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\FBAInboundV0\Dto\PutTransportDetailsRequest;
use SellingPartnerApi\Seller\FBAInboundV0\Responses\PutTransportDetailsResponse;

/**
 * putTransportDetails
 */
class PutTransportDetails extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    /**
     * @param  string  $shipmentId  A shipment identifier originally returned by the createInboundShipmentPlan operation.
     * @param  PutTransportDetailsRequest  $putTransportDetailsRequest  The request schema for a putTransportDetails operation.
     */
    public function __construct(
        protected string $shipmentId,
        public PutTransportDetailsRequest $putTransportDetailsRequest,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/fba/inbound/v0/shipments/{$this->shipmentId}/transport";
    }

    public function createDtoFromResponse(Response $response): PutTransportDetailsResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => PutTransportDetailsResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json());
    }

    public function defaultBody(): array
    {
        return $this->putTransportDetailsRequest->toArray();
    }
}
