<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\ProductPricingV0\Dto\GetListingOffersBatchRequest;
use SellingPartnerApi\Seller\ProductPricingV0\Responses\Errors;
use SellingPartnerApi\Seller\ProductPricingV0\Responses\GetListingOffersBatchResponse;

/**
 * getListingOffersBatch
 */
class GetListingOffersBatch extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  GetListingOffersBatchRequest  $getListingOffersBatchRequest  The request associated with the `getListingOffersBatch` API call.
     */
    public function __construct(
        public GetListingOffersBatchRequest $getListingOffersBatchRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/batches/products/pricing/v0/listingOffers';
    }

    public function createDtoFromResponse(Response $response): GetListingOffersBatchResponse|Errors
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => GetListingOffersBatchResponse::class,
            400, 401, 403, 404, 429, 500, 503 => Errors::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->getListingOffersBatchRequest->toArray();
    }
}
