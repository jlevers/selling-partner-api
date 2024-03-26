<?php

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Requests;

use Crescat\SaloonSdkGenerator\EmptyResponse;
use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\SupplySourcesV20200701\Dto\UpdateSupplySourceRequest;
use SellingPartnerApi\Seller\SupplySourcesV20200701\Responses\ErrorList;

/**
 * updateSupplySource
 */
class UpdateSupplySource extends Request
{
    protected Method $method = Method::PUT;

    /**
     * @param  string  $supplySourceId  The unique identitier of a supply source.
     * @param  UpdateSupplySourceRequest  $updateSupplySourceRequest  A request to update the configuration and capabilities of a supply source.
     */
    public function __construct(
        protected string $supplySourceId,
        public UpdateSupplySourceRequest $updateSupplySourceRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/supplySources/2020-07-01/supplySources/{$this->supplySourceId}";
    }

    public function createDtoFromResponse(Response $response): EmptyResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            204 => EmptyResponse::class,
            400, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->updateSupplySourceRequest->toArray();
    }
}
