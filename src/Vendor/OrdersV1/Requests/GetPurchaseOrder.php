<?php

namespace SellingPartnerApi\Vendor\OrdersV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Vendor\OrdersV1\Responses\GetPurchaseOrderResponse;

/**
 * getPurchaseOrder
 */
class GetPurchaseOrder extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $purchaseOrderNumber  The purchase order identifier for the order that you want. Formatting Notes: 8-character alpha-numeric code.
     */
    public function __construct(
        protected string $purchaseOrderNumber,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/vendor/orders/v1/purchaseOrders/{$this->purchaseOrderNumber}";
    }

    public function createDtoFromResponse(Response $response): GetPurchaseOrderResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 415, 429, 500, 503 => GetPurchaseOrderResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
