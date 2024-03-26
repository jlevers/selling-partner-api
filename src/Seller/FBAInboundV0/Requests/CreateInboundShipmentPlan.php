<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\FBAInboundV0\Dto\CreateInboundShipmentPlanRequest;
use SellingPartnerApi\Seller\FBAInboundV0\Responses\CreateInboundShipmentPlanResponse;

/**
 * createInboundShipmentPlan
 */
class CreateInboundShipmentPlan extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  CreateInboundShipmentPlanRequest  $createInboundShipmentPlanRequest  The request schema for the createInboundShipmentPlan operation.
     */
    public function __construct(
        public CreateInboundShipmentPlanRequest $createInboundShipmentPlanRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/fba/inbound/v0/plans';
    }

    public function createDtoFromResponse(Response $response): CreateInboundShipmentPlanResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => CreateInboundShipmentPlanResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->createInboundShipmentPlanRequest->toArray();
    }
}
