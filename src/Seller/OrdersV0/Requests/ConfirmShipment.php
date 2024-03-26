<?php

namespace SellingPartnerApi\Seller\OrdersV0\Requests;

use Crescat\SaloonSdkGenerator\EmptyResponse;
use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\OrdersV0\Dto\ConfirmShipmentRequest;
use SellingPartnerApi\Seller\OrdersV0\Responses\ConfirmShipmentErrorResponse;

/**
 * confirmShipment
 */
class ConfirmShipment extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $orderId  An Amazon-defined order identifier, in 3-7-7 format.
     * @param  ConfirmShipmentRequest  $confirmShipmentRequest  The request schema for an shipment confirmation.
     */
    public function __construct(
        protected string $orderId,
        public ConfirmShipmentRequest $confirmShipmentRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/orders/v0/orders/{$this->orderId}/shipmentConfirmation";
    }

    public function createDtoFromResponse(Response $response): EmptyResponse|ConfirmShipmentErrorResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            204 => EmptyResponse::class,
            400, 401, 403, 404, 429, 500, 503 => ConfirmShipmentErrorResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->confirmShipmentRequest->toArray();
    }
}
