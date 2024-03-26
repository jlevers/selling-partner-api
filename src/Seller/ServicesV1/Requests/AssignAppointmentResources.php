<?php

namespace SellingPartnerApi\Seller\ServicesV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\ServicesV1\Dto\AssignAppointmentResourcesRequest;
use SellingPartnerApi\Seller\ServicesV1\Responses\AssignAppointmentResourcesResponse;

/**
 * assignAppointmentResources
 */
class AssignAppointmentResources extends Request
{
    protected Method $method = Method::PUT;

    /**
     * @param  string  $serviceJobId  An Amazon-defined service job identifier. Get this value by calling the `getServiceJobs` operation of the Services API.
     * @param  string  $appointmentId  An Amazon-defined identifier of active service job appointment.
     * @param  AssignAppointmentResourcesRequest  $assignAppointmentResourcesRequest  Request schema for the `assignAppointmentResources` operation.
     */
    public function __construct(
        protected string $serviceJobId,
        protected string $appointmentId,
        public AssignAppointmentResourcesRequest $assignAppointmentResourcesRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/service/v1/serviceJobs/{$this->serviceJobId}/appointments/{$this->appointmentId}/resources";
    }

    public function createDtoFromResponse(Response $response): AssignAppointmentResourcesResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 403, 404, 413, 415, 422, 429, 500, 503 => AssignAppointmentResourcesResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->assignAppointmentResourcesRequest->toArray();
    }
}
