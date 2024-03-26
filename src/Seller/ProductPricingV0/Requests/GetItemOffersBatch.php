<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\ProductPricingV0\Dto\GetItemOffersBatchRequest;
use SellingPartnerApi\Seller\ProductPricingV0\Responses\Errors;
use SellingPartnerApi\Seller\ProductPricingV0\Responses\GetItemOffersBatchResponse;

/**
 * getItemOffersBatch
 */
class GetItemOffersBatch extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  GetItemOffersBatchRequest  $getItemOffersBatchRequest  The request associated with the `getItemOffersBatch` API call.
     */
    public function __construct(
        public GetItemOffersBatchRequest $getItemOffersBatchRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/batches/products/pricing/v0/itemOffers';
    }

    public function createDtoFromResponse(Response $response): GetItemOffersBatchResponse|Errors
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => GetItemOffersBatchResponse::class,
            400, 401, 403, 404, 429, 500, 503 => Errors::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->getItemOffersBatchRequest->toArray();
    }
}
