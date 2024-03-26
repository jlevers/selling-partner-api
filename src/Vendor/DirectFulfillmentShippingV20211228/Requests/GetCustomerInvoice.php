<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Middleware\RestrictedDataToken;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Responses\CustomerInvoice;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Responses\ErrorList;

/**
 * getCustomerInvoice
 */
class GetCustomerInvoice extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $purchaseOrderNumber  Purchase order number of the shipment for which to return the invoice.
     */
    public function __construct(
        protected string $purchaseOrderNumber,
    ) {
        $rdtMiddleware = new RestrictedDataToken('/vendor/directFulfillment/shipping/2021-12-28/customerInvoices/{purchaseOrderNumber}', 'GET', []);
        $this->middleware()->onRequest($rdtMiddleware);
    }

    public function resolveEndpoint(): string
    {
        return "/vendor/directFulfillment/shipping/2021-12-28/customerInvoices/{$this->purchaseOrderNumber}";
    }

    public function createDtoFromResponse(Response $response): CustomerInvoice|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => CustomerInvoice::class,
            400, 401, 403, 404, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
