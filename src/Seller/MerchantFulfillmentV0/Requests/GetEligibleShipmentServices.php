<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto\GetEligibleShipmentServicesRequest;
use SellingPartnerApi\Seller\MerchantFulfillmentV0\Responses\GetEligibleShipmentServicesResponse;

/**
 * getEligibleShipmentServices
 */
class GetEligibleShipmentServices extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  GetEligibleShipmentServicesRequest  $getEligibleShipmentServicesRequest  Request schema.
     */
    public function __construct(
        public GetEligibleShipmentServicesRequest $getEligibleShipmentServicesRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/mfn/v0/eligibleShippingServices';
    }

    public function createDtoFromResponse(Response $response): GetEligibleShipmentServicesResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => GetEligibleShipmentServicesResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->getEligibleShipmentServicesRequest->toArray();
    }
}
