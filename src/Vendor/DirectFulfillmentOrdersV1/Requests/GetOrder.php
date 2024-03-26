<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Middleware\RestrictedDataToken;
use SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Responses\GetOrderResponse;

/**
 * getOrder
 */
class GetOrder extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $purchaseOrderNumber  The order identifier for the purchase order that you want. Formatting Notes: alpha-numeric code.
     */
    public function __construct(
        protected string $purchaseOrderNumber,
    ) {
        $rdtMiddleware = new RestrictedDataToken('/vendor/directFulfillment/orders/v1/purchaseOrders/{purchaseOrderNumber}', 'GET', []);
        $this->middleware()->onRequest($rdtMiddleware);
    }

    public function resolveEndpoint(): string
    {
        return "/vendor/directFulfillment/orders/v1/purchaseOrders/{$this->purchaseOrderNumber}";
    }

    public function createDtoFromResponse(Response $response): GetOrderResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 415, 429, 500, 503 => GetOrderResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
