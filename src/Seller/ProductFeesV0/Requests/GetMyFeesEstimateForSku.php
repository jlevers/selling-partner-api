<?php

namespace SellingPartnerApi\Seller\ProductFeesV0\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\ProductFeesV0\Dto\GetMyFeesEstimateRequest;
use SellingPartnerApi\Seller\ProductFeesV0\Responses\GetMyFeesEstimateResponse;

/**
 * getMyFeesEstimateForSKU
 */
class GetMyFeesEstimateForSku extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $sellerSku  Used to identify an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.
     * @param  GetMyFeesEstimateRequest  $getMyFeesEstimateRequest  Request schema.
     */
    public function __construct(
        protected string $sellerSku,
        public GetMyFeesEstimateRequest $getMyFeesEstimateRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/products/fees/v0/listings/{$this->sellerSku}/feesEstimate";
    }

    public function createDtoFromResponse(Response $response): GetMyFeesEstimateResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => GetMyFeesEstimateResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->getMyFeesEstimateRequest->toArray();
    }
}
