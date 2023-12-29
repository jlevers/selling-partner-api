<?php

namespace SellingPartnerApi\Seller\OrdersV0\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\OrdersV0\Responses\GetOrderBuyerInfoResponse;

/**
 * getOrderBuyerInfo
 */
class GetOrderBuyerInfo extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $orderId An orderId is an Amazon-defined order identifier, in 3-7-7 format.
     */
    public function __construct(
        protected string $orderId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/orders/v0/orders/{$this->orderId}/buyerInfo";
    }

    public function createDtoFromResponse(Response $response): GetOrderBuyerInfoResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 403, 404, 429, 500, 503 => GetOrderBuyerInfoResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
