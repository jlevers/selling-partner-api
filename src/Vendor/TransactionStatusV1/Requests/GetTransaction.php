<?php

namespace SellingPartnerApi\Vendor\TransactionStatusV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Vendor\TransactionStatusV1\Responses\GetTransactionResponse;

/**
 * getTransaction
 */
class GetTransaction extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $transactionId  The GUID provided by Amazon in the 'transactionId' field in response to the post request of a specific transaction.
     */
    public function __construct(
        protected string $transactionId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/vendor/transactions/v1/transactions/{$this->transactionId}";
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
