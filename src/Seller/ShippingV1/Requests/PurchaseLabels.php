<?php

namespace SellingPartnerApi\Seller\ShippingV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\ShippingV1\Dto\PurchaseLabelsRequest;
use SellingPartnerApi\Seller\ShippingV1\Responses\PurchaseLabelsResponse;

/**
 * purchaseLabels
 */
class PurchaseLabels extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  PurchaseLabelsRequest  $purchaseLabelsRequest  The request schema for the purchaseLabels operation.
     */
    public function __construct(
        protected string $shipmentId,
        public PurchaseLabelsRequest $purchaseLabelsRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/shipping/v1/shipments/{$this->shipmentId}/purchaseLabels";
    }

    public function createDtoFromResponse(Response $response): PurchaseLabelsResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => PurchaseLabelsResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->purchaseLabelsRequest->toArray();
    }
}
