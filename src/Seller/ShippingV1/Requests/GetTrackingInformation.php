<?php

namespace SellingPartnerApi\Seller\ShippingV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\ShippingV1\Responses\GetTrackingInformationResponse;

/**
 * getTrackingInformation
 */
class GetTrackingInformation extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        protected string $trackingId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/shipping/v1/tracking/{$this->trackingId}";
    }

    public function createDtoFromResponse(Response $response): GetTrackingInformationResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => GetTrackingInformationResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
