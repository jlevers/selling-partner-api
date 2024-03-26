<?php

namespace SellingPartnerApi\Seller\ShippingV2\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\ShippingV2\Dto\GetRatesRequest;
use SellingPartnerApi\Seller\ShippingV2\Responses\ErrorList;
use SellingPartnerApi\Seller\ShippingV2\Responses\GetRatesResponse;

/**
 * getRates
 */
class GetRates extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  GetRatesRequest  $getRatesRequest  The request schema for the getRates operation. When the channelType is Amazon, the shipTo address is not required and will be ignored.
     */
    public function __construct(
        public GetRatesRequest $getRatesRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/shipping/v2/shipments/rates';
    }

    public function createDtoFromResponse(Response $response): GetRatesResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => GetRatesResponse::class,
            400, 401, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->getRatesRequest->toArray();
    }
}
