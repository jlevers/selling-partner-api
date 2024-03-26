<?php

namespace SellingPartnerApi\Seller\OrdersV0\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Middleware\RestrictedDataToken;
use SellingPartnerApi\Seller\OrdersV0\Responses\GetOrderRegulatedInfoResponse;

/**
 * getOrderRegulatedInfo
 */
class GetOrderRegulatedInfo extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $orderId  An orderId is an Amazon-defined order identifier, in 3-7-7 format.
     */
    public function __construct(
        protected string $orderId,
    ) {
        $rdtMiddleware = new RestrictedDataToken('/orders/v0/orders/{orderId}/regulatedInfo', 'GET', []);
        $this->middleware()->onRequest($rdtMiddleware);
    }

    public function resolveEndpoint(): string
    {
        return "/orders/v0/orders/{$this->orderId}/regulatedInfo";
    }

    public function createDtoFromResponse(Response $response): GetOrderRegulatedInfoResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 403, 404, 429, 500, 503 => GetOrderRegulatedInfoResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
