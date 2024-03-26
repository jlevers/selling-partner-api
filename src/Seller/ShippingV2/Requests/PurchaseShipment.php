<?php

namespace SellingPartnerApi\Seller\ShippingV2\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\ShippingV2\Dto\PurchaseShipmentRequest;
use SellingPartnerApi\Seller\ShippingV2\Responses\ErrorList;
use SellingPartnerApi\Seller\ShippingV2\Responses\PurchaseShipmentResponse;

/**
 * purchaseShipment
 */
class PurchaseShipment extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  PurchaseShipmentRequest  $purchaseShipmentRequest  The request schema for the purchaseShipment operation.
     */
    public function __construct(
        public PurchaseShipmentRequest $purchaseShipmentRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/shipping/v2/shipments';
    }

    public function createDtoFromResponse(Response $response): PurchaseShipmentResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => PurchaseShipmentResponse::class,
            400, 401, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->purchaseShipmentRequest->toArray();
    }
}
