<?php

namespace SellingPartnerApi\Seller\MessagingV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\MessagingV1\Responses\GetMessagingActionsForOrderResponse;

/**
 * getMessagingActionsForOrder
 */
class GetMessagingActionsForOrder extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $amazonOrderId  An Amazon order identifier. This specifies the order for which you want a list of available message types.
     * @param  array  $marketplaceIds  A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
     */
    public function __construct(
        protected string $amazonOrderId,
        protected array $marketplaceIds,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['marketplaceIds' => $this->marketplaceIds]);
    }

    public function resolveEndpoint(): string
    {
        return "/messaging/v1/orders/{$this->amazonOrderId}";
    }

    public function createDtoFromResponse(Response $response): GetMessagingActionsForOrderResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 403, 404, 413, 415, 429, 500, 503 => GetMessagingActionsForOrderResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
