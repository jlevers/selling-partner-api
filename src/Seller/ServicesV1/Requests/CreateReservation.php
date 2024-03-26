<?php

namespace SellingPartnerApi\Seller\ServicesV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\ServicesV1\Dto\CreateReservationRequest;
use SellingPartnerApi\Seller\ServicesV1\Responses\CreateReservationResponse;

/**
 * createReservation
 */
class CreateReservation extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  CreateReservationRequest  $createReservationRequest  Request schema for the `createReservation` operation.
     * @param  array  $marketplaceIds  An identifier for the marketplace in which the resource operates.
     */
    public function __construct(
        public CreateReservationRequest $createReservationRequest,
        protected array $marketplaceIds,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['marketplaceIds' => $this->marketplaceIds]);
    }

    public function resolveEndpoint(): string
    {
        return '/service/v1/reservation';
    }

    public function createDtoFromResponse(Response $response): CreateReservationResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 403, 404, 413, 415, 429, 500, 503 => CreateReservationResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->createReservationRequest->toArray();
    }
}
