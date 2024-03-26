<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\FBAInboundV0\Responses\ConfirmPreorderResponse;

/**
 * confirmPreorder
 */
class ConfirmPreorder extends Request
{
    protected Method $method = Method::PUT;

    /**
     * @param  string  $shipmentId  A shipment identifier originally returned by the createInboundShipmentPlan operation.
     * @param  DateTime  $needByDate  Date that the shipment must arrive at the Amazon fulfillment center to avoid delivery promise breaks for pre-ordered items. Must be in YYYY-MM-DD format. The response to the getPreorderInfo operation returns this value.
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace the shipment is tied to.
     */
    public function __construct(
        protected string $shipmentId,
        protected \DateTime $needByDate,
        protected string $marketplaceId,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['NeedByDate' => $this->needByDate?->format(\DateTime::RFC3339), 'MarketplaceId' => $this->marketplaceId]);
    }

    public function resolveEndpoint(): string
    {
        return "/fba/inbound/v0/shipments/{$this->shipmentId}/preorder/confirm";
    }

    public function createDtoFromResponse(Response $response): ConfirmPreorderResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => ConfirmPreorderResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
