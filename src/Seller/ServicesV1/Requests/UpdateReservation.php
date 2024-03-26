<?php

namespace SellingPartnerApi\Seller\ServicesV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\ServicesV1\Dto\UpdateReservationRequest;
use SellingPartnerApi\Seller\ServicesV1\Responses\UpdateReservationResponse;

/**
 * updateReservation
 */
class UpdateReservation extends Request
{
    protected Method $method = Method::PUT;

    /**
     * @param  string  $reservationId  Reservation Identifier
     * @param  UpdateReservationRequest  $updateReservationRequest  Request schema for the `updateReservation` operation.
     * @param  array  $marketplaceIds  An identifier for the marketplace in which the resource operates.
     */
    public function __construct(
        protected string $reservationId,
        public UpdateReservationRequest $updateReservationRequest,
        protected array $marketplaceIds,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['marketplaceIds' => $this->marketplaceIds]);
    }

    public function resolveEndpoint(): string
    {
        return "/service/v1/reservation/{$this->reservationId}";
    }

    public function createDtoFromResponse(Response $response): UpdateReservationResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 403, 404, 413, 415, 429, 500, 503 => UpdateReservationResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->updateReservationRequest->toArray();
    }
}
