<?php

namespace SellingPartnerApi\Seller\ShippingV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\ShippingV1\Dto\CreateShipmentRequest;
use SellingPartnerApi\Seller\ShippingV1\Responses\CreateShipmentResponse;

/**
 * createShipment
 */
class CreateShipment extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  CreateShipmentRequest  $createShipmentRequest  The request schema for the createShipment operation.
     */
    public function __construct(
        public CreateShipmentRequest $createShipmentRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/shipping/v1/shipments';
    }

    public function createDtoFromResponse(Response $response): CreateShipmentResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => CreateShipmentResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->createShipmentRequest->toArray();
    }
}
