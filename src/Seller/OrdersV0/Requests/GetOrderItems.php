<?php

namespace SellingPartnerApi\Seller\OrdersV0\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Middleware\RestrictedDataToken;
use SellingPartnerApi\Seller\OrdersV0\Responses\GetOrderItemsResponse;

/**
 * getOrderItems
 */
class GetOrderItems extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $orderId  An Amazon-defined order identifier, in 3-7-7 format.
     * @param  ?string  $nextToken  A string token returned in the response of your previous request.
     */
    public function __construct(
        protected string $orderId,
        protected ?string $nextToken = null,
    ) {
        $rdtMiddleware = new RestrictedDataToken('/orders/v0/orders/{orderId}/orderItems', 'GET', ['buyerInfo']);
        $this->middleware()->onRequest($rdtMiddleware);
    }

    public function defaultQuery(): array
    {
        return array_filter(['NextToken' => $this->nextToken]);
    }

    public function resolveEndpoint(): string
    {
        return "/orders/v0/orders/{$this->orderId}/orderItems";
    }

    public function createDtoFromResponse(Response $response): GetOrderItemsResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 403, 404, 429, 500, 503 => GetOrderItemsResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
