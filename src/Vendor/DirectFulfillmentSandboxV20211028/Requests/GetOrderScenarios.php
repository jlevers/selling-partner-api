<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentSandboxV20211028\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Vendor\DirectFulfillmentSandboxV20211028\Responses\ErrorList;
use SellingPartnerApi\Vendor\DirectFulfillmentSandboxV20211028\Responses\TransactionStatus;

/**
 * getOrderScenarios
 */
class GetOrderScenarios extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $transactionId  The transaction identifier returned in the response to the generateOrderScenarios operation.
     */
    public function __construct(
        protected string $transactionId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/vendor/directFulfillment/sandbox/2021-10-28/transactions/{$this->transactionId}";
    }

    public function createDtoFromResponse(Response $response): TransactionStatus|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => TransactionStatus::class,
            400, 401, 403, 404, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
