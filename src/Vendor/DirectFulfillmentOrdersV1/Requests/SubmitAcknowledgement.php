<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Dto\SubmitAcknowledgementRequest;
use SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Responses\SubmitAcknowledgementResponse;

/**
 * submitAcknowledgement
 */
class SubmitAcknowledgement extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  SubmitAcknowledgementRequest  $submitAcknowledgementRequest  The request schema for the submitAcknowledgement operation.
     */
    public function __construct(
        public SubmitAcknowledgementRequest $submitAcknowledgementRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/vendor/directFulfillment/orders/v1/acknowledgements';
    }

    public function createDtoFromResponse(Response $response): SubmitAcknowledgementResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            202, 400, 403, 404, 413, 415, 429, 500, 503 => SubmitAcknowledgementResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->submitAcknowledgementRequest->toArray();
    }
}
