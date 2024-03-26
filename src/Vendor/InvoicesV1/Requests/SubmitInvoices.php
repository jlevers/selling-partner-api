<?php

namespace SellingPartnerApi\Vendor\InvoicesV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Vendor\InvoicesV1\Dto\SubmitInvoicesRequest;
use SellingPartnerApi\Vendor\InvoicesV1\Responses\SubmitInvoicesResponse;

/**
 * submitInvoices
 */
class SubmitInvoices extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  SubmitInvoicesRequest  $submitInvoicesRequest  The request schema for the submitInvoices operation.
     */
    public function __construct(
        public SubmitInvoicesRequest $submitInvoicesRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/vendor/payments/v1/invoices';
    }

    public function createDtoFromResponse(Response $response): SubmitInvoicesResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            202, 400, 403, 404, 413, 415, 429, 500, 503 => SubmitInvoicesResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->submitInvoicesRequest->toArray();
    }
}
