<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Dto\SubmitAcknowledgementRequest;
use SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Responses\ErrorList;
use SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Responses\TransactionId;

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
        return '/vendor/directFulfillment/orders/2021-12-28/acknowledgements';
    }

    public function createDtoFromResponse(Response $response): TransactionId|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            202 => TransactionId::class,
            400, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->submitAcknowledgementRequest->toArray();
    }
}
