<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Middleware\RestrictedDataToken;
use SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Responses\ErrorList;
use SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Responses\Order;

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
        $rdtMiddleware = new RestrictedDataToken('/vendor/directFulfillment/orders/2021-12-28/purchaseOrders/{purchaseOrderNumber}', 'GET', []);
        $this->middleware()->onRequest($rdtMiddleware);
    }

    public function resolveEndpoint(): string
    {
        return "/vendor/directFulfillment/orders/2021-12-28/purchaseOrders/{$this->purchaseOrderNumber}";
    }

    public function createDtoFromResponse(Response $response): Order|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => Order::class,
            400, 401, 403, 404, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
