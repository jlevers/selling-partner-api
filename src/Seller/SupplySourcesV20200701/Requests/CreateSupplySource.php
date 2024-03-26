<?php

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\SupplySourcesV20200701\Dto\CreateSupplySourceRequest;
use SellingPartnerApi\Seller\SupplySourcesV20200701\Responses\CreateSupplySourceResponse;
use SellingPartnerApi\Seller\SupplySourcesV20200701\Responses\ErrorList;

/**
 * createSupplySource
 */
class CreateSupplySource extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  CreateSupplySourceRequest  $createSupplySourceRequest  A request to create a supply source.
     */
    public function __construct(
        public CreateSupplySourceRequest $createSupplySourceRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/supplySources/2020-07-01/supplySources';
    }

    public function createDtoFromResponse(Response $response): CreateSupplySourceResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => CreateSupplySourceResponse::class,
            400, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->createSupplySourceRequest->toArray();
    }
}
