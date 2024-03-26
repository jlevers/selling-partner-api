<?php

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\ProductPricingV20220501\Dto\GetFeaturedOfferExpectedPriceBatchRequest;
use SellingPartnerApi\Seller\ProductPricingV20220501\Responses\Errors;
use SellingPartnerApi\Seller\ProductPricingV20220501\Responses\GetFeaturedOfferExpectedPriceBatchResponse;

/**
 * getFeaturedOfferExpectedPriceBatch
 */
class GetFeaturedOfferExpectedPriceBatch extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  GetFeaturedOfferExpectedPriceBatchRequest  $getFeaturedOfferExpectedPriceBatchRequest  The request body for the `getFeaturedOfferExpectedPriceBatch` operation.
     */
    public function __construct(
        public GetFeaturedOfferExpectedPriceBatchRequest $getFeaturedOfferExpectedPriceBatchRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/batches/products/pricing/2022-05-01/offer/featuredOfferExpectedPrice';
    }

    public function createDtoFromResponse(Response $response): GetFeaturedOfferExpectedPriceBatchResponse|Errors
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => GetFeaturedOfferExpectedPriceBatchResponse::class,
            400, 401, 403, 404, 429, 500, 503 => Errors::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->getFeaturedOfferExpectedPriceBatchRequest->toArray();
    }
}
