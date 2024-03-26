<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Dto\CreateFulfillmentOrderRequest;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Responses\CreateFulfillmentOrderResponse;

/**
 * createFulfillmentOrder
 */
class CreateFulfillmentOrder extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  CreateFulfillmentOrderRequest  $createFulfillmentOrderRequest  The request body schema for the createFulfillmentOrder operation.
     */
    public function __construct(
        public CreateFulfillmentOrderRequest $createFulfillmentOrderRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/fba/outbound/2020-07-01/fulfillmentOrders';
    }

    public function createDtoFromResponse(Response $response): CreateFulfillmentOrderResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => CreateFulfillmentOrderResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->createFulfillmentOrderRequest->toArray();
    }
}
