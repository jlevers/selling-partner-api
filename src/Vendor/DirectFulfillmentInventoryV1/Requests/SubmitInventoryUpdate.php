<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentInventoryV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Vendor\DirectFulfillmentInventoryV1\Dto\SubmitInventoryUpdateRequest;
use SellingPartnerApi\Vendor\DirectFulfillmentInventoryV1\Responses\SubmitInventoryUpdateResponse;

/**
 * submitInventoryUpdate
 */
class SubmitInventoryUpdate extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $warehouseId  Identifier for the warehouse for which to update inventory.
     * @param  SubmitInventoryUpdateRequest  $submitInventoryUpdateRequest  The request body for the submitInventoryUpdate operation.
     */
    public function __construct(
        protected string $warehouseId,
        public SubmitInventoryUpdateRequest $submitInventoryUpdateRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/vendor/directFulfillment/inventory/v1/warehouses/{$this->warehouseId}/items";
    }

    public function createDtoFromResponse(Response $response): SubmitInventoryUpdateResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            202, 400, 403, 404, 413, 415, 429, 500, 503 => SubmitInventoryUpdateResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->submitInventoryUpdateRequest->toArray();
    }
}
