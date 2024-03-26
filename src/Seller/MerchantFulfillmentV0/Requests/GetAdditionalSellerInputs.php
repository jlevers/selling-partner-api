<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto\GetAdditionalSellerInputsRequest;
use SellingPartnerApi\Seller\MerchantFulfillmentV0\Responses\GetAdditionalSellerInputsResponse;

/**
 * getAdditionalSellerInputs
 */
class GetAdditionalSellerInputs extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  GetAdditionalSellerInputsRequest  $getAdditionalSellerInputsRequest  Request schema.
     */
    public function __construct(
        public GetAdditionalSellerInputsRequest $getAdditionalSellerInputsRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/mfn/v0/additionalSellerInputs';
    }

    public function createDtoFromResponse(Response $response): GetAdditionalSellerInputsResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => GetAdditionalSellerInputsResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->getAdditionalSellerInputsRequest->toArray();
    }
}
