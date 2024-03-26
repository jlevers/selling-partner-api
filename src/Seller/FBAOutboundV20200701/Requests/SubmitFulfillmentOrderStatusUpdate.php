<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Dto\SubmitFulfillmentOrderStatusUpdateRequest;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Responses\SubmitFulfillmentOrderStatusUpdateResponse;

/**
 * submitFulfillmentOrderStatusUpdate
 */
class SubmitFulfillmentOrderStatusUpdate extends Request
{
    protected Method $method = Method::PUT;

    /**
     * @param  string  $sellerFulfillmentOrderId  The identifier assigned to the item by the seller when the fulfillment order was created.
     * @param  SubmitFulfillmentOrderStatusUpdateRequest  $submitFulfillmentOrderStatusUpdateRequest  The request body schema for the submitFulfillmentOrderStatusUpdate operation.
     */
    public function __construct(
        protected string $sellerFulfillmentOrderId,
        public SubmitFulfillmentOrderStatusUpdateRequest $submitFulfillmentOrderStatusUpdateRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/fba/outbound/2020-07-01/fulfillmentOrders/{$this->sellerFulfillmentOrderId}/status";
    }

    public function createDtoFromResponse(Response $response): SubmitFulfillmentOrderStatusUpdateResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => SubmitFulfillmentOrderStatusUpdateResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->submitFulfillmentOrderStatusUpdateRequest->toArray();
    }
}
