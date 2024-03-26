<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Responses\CancelFulfillmentOrderResponse;

/**
 * cancelFulfillmentOrder
 */
class CancelFulfillmentOrder extends Request
{
    protected Method $method = Method::PUT;

    /**
     * @param  string  $sellerFulfillmentOrderId  The identifier assigned to the item by the seller when the fulfillment order was created.
     */
    public function __construct(
        protected string $sellerFulfillmentOrderId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/fba/outbound/2020-07-01/fulfillmentOrders/{$this->sellerFulfillmentOrderId}/cancel";
    }

    public function createDtoFromResponse(Response $response): CancelFulfillmentOrderResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => CancelFulfillmentOrderResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
