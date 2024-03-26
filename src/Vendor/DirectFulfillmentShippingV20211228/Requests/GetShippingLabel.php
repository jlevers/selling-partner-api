<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Middleware\RestrictedDataToken;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Responses\ErrorList;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Responses\ShippingLabel;

/**
 * getShippingLabel
 */
class GetShippingLabel extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $purchaseOrderNumber  The purchase order number for which you want to return the shipping label. It should be the same purchaseOrderNumber as received in the order.
     */
    public function __construct(
        protected string $purchaseOrderNumber,
    ) {
        $rdtMiddleware = new RestrictedDataToken('/vendor/directFulfillment/shipping/2021-12-28/shippingLabels/{purchaseOrderNumber}', 'GET', []);
        $this->middleware()->onRequest($rdtMiddleware);
    }

    public function resolveEndpoint(): string
    {
        return "/vendor/directFulfillment/shipping/2021-12-28/shippingLabels/{$this->purchaseOrderNumber}";
    }

    public function createDtoFromResponse(Response $response): ShippingLabel|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ShippingLabel::class,
            400, 401, 403, 404, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
