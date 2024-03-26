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
 * getMyFeesEstimateForASIN
 */
class GetMyFeesEstimateForAsin extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     * @param  GetMyFeesEstimateRequest  $getMyFeesEstimateRequest  Request schema.
     */
    public function __construct(
        protected string $asin,
        public GetMyFeesEstimateRequest $getMyFeesEstimateRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/products/fees/v0/items/{$this->asin}/feesEstimate";
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
