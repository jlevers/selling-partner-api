<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Vendor\ShipmentsV1\Dto\SubmitShipments as SubmitShipments1;
use SellingPartnerApi\Vendor\ShipmentsV1\Responses\SubmitShipmentConfirmationsResponse;

/**
 * SubmitShipments
 */
class SubmitShipments extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  SubmitShipments  $submitShipments  The request schema for the SubmitTransportRequestConfirmations operation.
     */
    public function __construct(
        public SubmitShipments1 $submitShipments,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/vendor/shipping/v1/shipments';
    }

    public function createDtoFromResponse(Response $response): SubmitShipmentConfirmationsResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            202, 400, 403, 404, 413, 415, 429, 500, 503 => SubmitShipmentConfirmationsResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->submitShipments->toArray();
    }
}
