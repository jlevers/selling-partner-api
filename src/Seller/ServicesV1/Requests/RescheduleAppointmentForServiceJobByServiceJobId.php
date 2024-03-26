<?php

namespace SellingPartnerApi\Seller\ServicesV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\ServicesV1\Dto\RescheduleAppointmentRequest;
use SellingPartnerApi\Seller\ServicesV1\Responses\SetAppointmentResponse;

/**
 * rescheduleAppointmentForServiceJobByServiceJobId
 */
class RescheduleAppointmentForServiceJobByServiceJobId extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $serviceJobId  An Amazon defined service job identifier.
     * @param  string  $appointmentId  An existing appointment identifier for the Service Job.
     * @param  RescheduleAppointmentRequest  $rescheduleAppointmentRequest  Input for rescheduled appointment operation.
     */
    public function __construct(
        protected string $serviceJobId,
        protected string $appointmentId,
        public RescheduleAppointmentRequest $rescheduleAppointmentRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/service/v1/serviceJobs/{$this->serviceJobId}/appointments/{$this->appointmentId}";
    }

    public function createDtoFromResponse(Response $response): SetAppointmentResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 403, 404, 413, 415, 422, 429, 500, 503 => SetAppointmentResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->rescheduleAppointmentRequest->toArray();
    }
}
