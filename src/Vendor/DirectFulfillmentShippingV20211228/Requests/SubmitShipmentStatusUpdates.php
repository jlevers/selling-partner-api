<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto\SubmitShipmentStatusUpdatesRequest;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Responses\ErrorList;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Responses\TransactionReference;

/**
 * submitShipmentStatusUpdates
 */
class SubmitShipmentStatusUpdates extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(
        public SubmitShipmentStatusUpdatesRequest $submitShipmentStatusUpdatesRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/vendor/directFulfillment/shipping/2021-12-28/shipmentStatusUpdates';
    }

    public function createDtoFromResponse(Response $response): TransactionReference|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            202 => TransactionReference::class,
            400, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->submitShipmentStatusUpdatesRequest->toArray();
    }
}
