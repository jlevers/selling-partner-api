<?php

namespace SellingPartnerApi\Seller\OrdersV0\Requests;

use Crescat\SaloonSdkGenerator\EmptyResponse;
use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\OrdersV0\Dto\UpdateShipmentStatusRequest;
use SellingPartnerApi\Seller\OrdersV0\Responses\UpdateShipmentStatusErrorResponse;

/**
 * updateShipmentStatus
 */
class UpdateShipmentStatus extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $orderId  An Amazon-defined order identifier, in 3-7-7 format.
     * @param  UpdateShipmentStatusRequest  $updateShipmentStatusRequest  The request body for the updateShipmentStatus operation.
     */
    public function __construct(
        protected string $orderId,
        public UpdateShipmentStatusRequest $updateShipmentStatusRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/orders/v0/orders/{$this->orderId}/shipment";
    }

    public function createDtoFromResponse(Response $response): EmptyResponse|UpdateShipmentStatusErrorResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            204 => EmptyResponse::class,
            400, 403, 404, 413, 415, 429, 500, 503 => UpdateShipmentStatusErrorResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->updateShipmentStatusRequest->toArray();
    }
}
