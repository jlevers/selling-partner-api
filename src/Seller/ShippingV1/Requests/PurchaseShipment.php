<?php

namespace SellingPartnerApi\Seller\ShippingV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\ShippingV1\Dto\PurchaseShipmentRequest;
use SellingPartnerApi\Seller\ShippingV1\Responses\PurchaseShipmentResponse;

/**
 * purchaseShipment
 */
class PurchaseShipment extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  PurchaseShipmentRequest  $purchaseShipmentRequest  The payload schema for the purchaseShipment operation.
     */
    public function __construct(
        public PurchaseShipmentRequest $purchaseShipmentRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/shipping/v1/purchaseShipment';
    }

    public function createDtoFromResponse(Response $response): PurchaseShipmentResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => PurchaseShipmentResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->purchaseShipmentRequest->toArray();
    }
}
