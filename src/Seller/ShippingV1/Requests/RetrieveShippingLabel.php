<?php

namespace SellingPartnerApi\Seller\ShippingV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\ShippingV1\Dto\RetrieveShippingLabelRequest;
use SellingPartnerApi\Seller\ShippingV1\Responses\RetrieveShippingLabelResponse;

/**
 * retrieveShippingLabel
 */
class RetrieveShippingLabel extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  RetrieveShippingLabelRequest  $retrieveShippingLabelRequest  The request schema for the retrieveShippingLabel operation.
     */
    public function __construct(
        protected string $shipmentId,
        protected string $trackingId,
        public RetrieveShippingLabelRequest $retrieveShippingLabelRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/shipping/v1/shipments/{$this->shipmentId}/containers/{$this->trackingId}/label";
    }

    public function createDtoFromResponse(Response $response): RetrieveShippingLabelResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => RetrieveShippingLabelResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->retrieveShippingLabelRequest->toArray();
    }
}
