<?php

namespace SellingPartnerApi\Seller\ShippingV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\ShippingV1\Dto\GetRatesRequest;
use SellingPartnerApi\Seller\ShippingV1\Responses\GetRatesResponse;

/**
 * getRates
 */
class GetRates extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  GetRatesRequest  $getRatesRequest  The payload schema for the getRates operation.
     */
    public function __construct(
        public GetRatesRequest $getRatesRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/shipping/v1/rates';
    }

    public function createDtoFromResponse(Response $response): GetRatesResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => GetRatesResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->getRatesRequest->toArray();
    }
}
