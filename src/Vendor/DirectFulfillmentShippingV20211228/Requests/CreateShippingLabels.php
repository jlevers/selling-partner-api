<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Middleware\RestrictedDataToken;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto\CreateShippingLabelsRequest;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Responses\ErrorList;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Responses\ShippingLabel;

/**
 * createShippingLabels
 */
class CreateShippingLabels extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $purchaseOrderNumber  The purchase order number for which you want to return the shipping labels. It should be the same purchaseOrderNumber as received in the order.
     * @param  CreateShippingLabelsRequest  $createShippingLabelsRequest  The request body for the createShippingLabels operation.
     */
    public function __construct(
        protected string $purchaseOrderNumber,
        public CreateShippingLabelsRequest $createShippingLabelsRequest,
    ) {
        $rdtMiddleware = new RestrictedDataToken('/vendor/directFulfillment/shipping/2021-12-28/shippingLabels/{purchaseOrderNumber}', 'POST', []);
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
            400, 403, 404, 409, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->createShippingLabelsRequest->toArray();
    }
}
