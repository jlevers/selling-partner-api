<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\FBAInboundV0\Responses\GetPreorderInfoResponse;

/**
 * getPreorderInfo
 */
class GetPreorderInfo extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $shipmentId  A shipment identifier originally returned by the createInboundShipmentPlan operation.
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace the shipment is tied to.
     */
    public function __construct(
        protected string $shipmentId,
        protected string $marketplaceId,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['MarketplaceId' => $this->marketplaceId]);
    }

    public function resolveEndpoint(): string
    {
        return "/fba/inbound/v0/shipments/{$this->shipmentId}/preorder";
    }

    public function createDtoFromResponse(Response $response): GetPreorderInfoResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => GetPreorderInfoResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
