<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentPaymentV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Vendor\DirectFulfillmentPaymentV1\Dto\SubmitInvoiceRequest;
use SellingPartnerApi\Vendor\DirectFulfillmentPaymentV1\Responses\SubmitInvoiceResponse;

/**
 * submitInvoice
 */
class SubmitInvoice extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  SubmitInvoiceRequest  $submitInvoiceRequest  The request schema for the submitInvoice operation.
     */
    public function __construct(
        public SubmitInvoiceRequest $submitInvoiceRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/vendor/directFulfillment/payments/v1/invoices';
    }

    public function createDtoFromResponse(Response $response): SubmitInvoiceResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            202, 400, 403, 404, 413, 415, 429, 500, 503 => SubmitInvoiceResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->submitInvoiceRequest->toArray();
    }
}
