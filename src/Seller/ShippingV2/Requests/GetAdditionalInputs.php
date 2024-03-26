<?php

namespace SellingPartnerApi\Seller\ShippingV2\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\ShippingV2\Responses\ErrorList;
use SellingPartnerApi\Seller\ShippingV2\Responses\GetAdditionalInputsResponse;

/**
 * getAdditionalInputs
 */
class GetAdditionalInputs extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $requestToken  The request token returned in the response to the getRates operation.
     * @param  string  $rateId  The rate identifier for the shipping offering (rate) returned in the response to the getRates operation.
     */
    public function __construct(
        protected string $requestToken,
        protected string $rateId,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['requestToken' => $this->requestToken, 'rateId' => $this->rateId]);
    }

    public function resolveEndpoint(): string
    {
        return '/shipping/v2/shipments/additionalInputs/schema';
    }

    public function createDtoFromResponse(Response $response): GetAdditionalInputsResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => GetAdditionalInputsResponse::class,
            400, 401, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
