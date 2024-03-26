<?php

namespace SellingPartnerApi\Seller\ServicesV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\ServicesV1\Responses\GetAppointmentSlotsResponse;

/**
 * getAppointmentSlots
 */
class GetAppointmentSlots extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $asin  ASIN associated with the service.
     * @param  string  $storeId  Store identifier defining the region scope to retrive appointment slots.
     * @param  array  $marketplaceIds  An identifier for the marketplace for which appointment slots are queried
     * @param  ?string  $startTime  A time from which the appointment slots will be retrieved. The specified time must be in ISO 8601 format. If `startTime` is provided, `endTime` should also be provided. Default value is as per business configuration.
     * @param  ?string  $endTime  A time up to which the appointment slots will be retrieved. The specified time must be in ISO 8601 format. If `endTime` is provided, `startTime` should also be provided. Default value is as per business configuration. Maximum range of appointment slots can be 90 days.
     */
    public function __construct(
        protected string $asin,
        protected string $storeId,
        protected array $marketplaceIds,
        protected ?string $startTime = null,
        protected ?string $endTime = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'asin' => $this->asin,
            'storeId' => $this->storeId,
            'marketplaceIds' => $this->marketplaceIds,
            'startTime' => $this->startTime,
            'endTime' => $this->endTime,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return '/service/v1/appointmentSlots';
    }

    public function createDtoFromResponse(Response $response): GetAppointmentSlotsResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 403, 404, 415, 422, 429, 500, 503 => GetAppointmentSlotsResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
