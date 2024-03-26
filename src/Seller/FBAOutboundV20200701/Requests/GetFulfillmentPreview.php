<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Dto\GetFulfillmentPreviewRequest;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Responses\GetFulfillmentPreviewResponse;

/**
 * getFulfillmentPreview
 */
class GetFulfillmentPreview extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  GetFulfillmentPreviewRequest  $getFulfillmentPreviewRequest  The request body schema for the getFulfillmentPreview operation.
     */
    public function __construct(
        public GetFulfillmentPreviewRequest $getFulfillmentPreviewRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/fba/outbound/2020-07-01/fulfillmentOrders/preview';
    }

    public function createDtoFromResponse(Response $response): GetFulfillmentPreviewResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => GetFulfillmentPreviewResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->getFulfillmentPreviewRequest->toArray();
    }
}
