<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\UpdateShipmentDeliveryWindowRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\ErrorList;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\UpdateShipmentDeliveryWindowResponse;

/**
 * updateShipmentDeliveryWindow
 */
class UpdateShipmentDeliveryWindow extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $inboundPlanId  Identifier to an inbound plan.
     * @param  string  $shipmentId  Identifier to a shipment. A shipment contains the boxes and units being inbounded.
     * @param  UpdateShipmentDeliveryWindowRequest  $updateShipmentDeliveryWindowRequest  The `updateShipmentDeliveryWindow` request.
     */
    public function __construct(
        protected string $inboundPlanId,
        protected string $shipmentId,
        public UpdateShipmentDeliveryWindowRequest $updateShipmentDeliveryWindowRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/inbound/fba/2024-03-20/inboundPlans/{$this->inboundPlanId}/shipments/{$this->shipmentId}/deliveryWindow";
    }

    public function createDtoFromResponse(Response $response): UpdateShipmentDeliveryWindowResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            202 => UpdateShipmentDeliveryWindowResponse::class,
            400, 500, 403, 404, 413, 415, 429, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->updateShipmentDeliveryWindowRequest->toArray();
    }
}
