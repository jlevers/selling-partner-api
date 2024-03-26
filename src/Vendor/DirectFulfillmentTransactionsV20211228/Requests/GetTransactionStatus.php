<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentTransactionsV20211228\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Vendor\DirectFulfillmentTransactionsV20211228\Responses\Error;
use SellingPartnerApi\Vendor\DirectFulfillmentTransactionsV20211228\Responses\ErrorList;
use SellingPartnerApi\Vendor\DirectFulfillmentTransactionsV20211228\Responses\TransactionStatus;

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
        return "/vendor/directFulfillment/transactions/2021-12-28/transactions/{$this->transactionId}";
    }

    public function createDtoFromResponse(Response $response): TransactionStatus|ErrorList|Error
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => TransactionStatus::class,
            400 => ErrorList::class,
            401, 403, 404, 415, 429, 500, 503 => Error::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
