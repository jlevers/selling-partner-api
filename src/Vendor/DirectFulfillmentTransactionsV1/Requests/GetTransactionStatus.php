<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentTransactionsV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Vendor\DirectFulfillmentTransactionsV1\Responses\GetTransactionResponse;

/**
 * getTransactionStatus
 */
class GetTransactionStatus extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $transactionId  Previously returned in the response to the POST request of a specific transaction.
     */
    public function __construct(
        protected string $transactionId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/vendor/directFulfillment/transactions/v1/transactions/{$this->transactionId}";
    }

    public function createDtoFromResponse(Response $response): GetTransactionResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 415, 429, 500, 503 => GetTransactionResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
