<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentSandboxV20211028\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Vendor\DirectFulfillmentSandboxV20211028\Dto\GenerateOrderScenarioRequest;
use SellingPartnerApi\Vendor\DirectFulfillmentSandboxV20211028\Responses\ErrorList;
use SellingPartnerApi\Vendor\DirectFulfillmentSandboxV20211028\Responses\TransactionReference;

/**
 * generateOrderScenarios
 */
class GenerateOrderScenarios extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  GenerateOrderScenarioRequest  $generateOrderScenarioRequest  The request body for the generateOrderScenarios operation.
     */
    public function __construct(
        public GenerateOrderScenarioRequest $generateOrderScenarioRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/vendor/directFulfillment/sandbox/2021-10-28/orders';
    }

    public function createDtoFromResponse(Response $response): TransactionReference|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            202 => TransactionReference::class,
            400, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->generateOrderScenarioRequest->toArray();
    }
}
