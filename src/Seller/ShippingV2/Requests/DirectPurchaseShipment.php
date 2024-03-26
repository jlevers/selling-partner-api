<?php

namespace SellingPartnerApi\Seller\ShippingV2\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\ShippingV2\Dto\DirectPurchaseRequest;
use SellingPartnerApi\Seller\ShippingV2\Responses\DirectPurchaseResponse;
use SellingPartnerApi\Seller\ShippingV2\Responses\ErrorList;

/**
 * directPurchaseShipment
 */
class DirectPurchaseShipment extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  DirectPurchaseRequest  $directPurchaseRequest  The request schema for the directPurchaseShipment operation. When the channel type is Amazon, the shipTo address is not required and will be ignored.
     */
    public function __construct(
        public DirectPurchaseRequest $directPurchaseRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/shipping/v2/shipments/directPurchase';
    }

    public function createDtoFromResponse(Response $response): DirectPurchaseResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => DirectPurchaseResponse::class,
            400, 401, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->directPurchaseRequest->toArray();
    }
}
