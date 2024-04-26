<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\CancelSelfShipAppointmentRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\CancelSelfShipAppointmentResponse;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\ErrorList;

/**
 * cancelSelfShipAppointment
 */
class CancelSelfShipAppointment extends Request
{
    protected Method $method = Method::PUT;

    /**
     * @param  string  $inboundPlanId  Identifier to an inbound plan.
     * @param  string  $shipmentId  Identifier to a shipment. A shipment contains the boxes and units being inbounded.
     * @param  string  $slotId  Identifier to a self-ship appointment slot.
     * @param  CancelSelfShipAppointmentRequest  $cancelSelfShipAppointmentRequest  The `cancelSelfShipAppointment` request.
     */
    public function __construct(
        protected string $inboundPlanId,
        protected string $shipmentId,
        protected string $slotId,
        public CancelSelfShipAppointmentRequest $cancelSelfShipAppointmentRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/inbound/fba/2024-03-20/inboundPlans/{$this->inboundPlanId}/shipments/{$this->shipmentId}/selfShipAppointmentSlots/{$this->slotId}/cancellation";
    }

    public function createDtoFromResponse(Response $response): CancelSelfShipAppointmentResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            202 => CancelSelfShipAppointmentResponse::class,
            400, 500, 403, 404, 413, 415, 429, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->cancelSelfShipAppointmentRequest->toArray();
    }
}
