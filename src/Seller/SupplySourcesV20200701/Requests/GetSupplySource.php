<?php

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\SupplySourcesV20200701\Responses\ErrorList;
use SellingPartnerApi\Seller\SupplySourcesV20200701\Responses\SupplySource;

/**
 * getSupplySource
 */
class GetSupplySource extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $supplySourceId  The unique identifier of a supply source.
     */
    public function __construct(
        protected string $supplySourceId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/supplySources/2020-07-01/supplySources/{$this->supplySourceId}";
    }

    public function createDtoFromResponse(Response $response): SupplySource|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => SupplySource::class,
            400, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
