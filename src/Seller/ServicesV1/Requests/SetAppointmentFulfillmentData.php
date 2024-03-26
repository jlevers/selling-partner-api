<?php

namespace SellingPartnerApi\Seller\ServicesV1\Requests;

use Crescat\SaloonSdkGenerator\EmptyResponse;
use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\ServicesV1\Dto\SetAppointmentFulfillmentDataRequest;
use SellingPartnerApi\Seller\ServicesV1\Responses\ErrorList;

/**
 * setAppointmentFulfillmentData
 */
class SetAppointmentFulfillmentData extends Request
{
    protected Method $method = Method::PUT;

    /**
     * @param  string  $serviceJobId  An Amazon-defined service job identifier. Get this value by calling the `getServiceJobs` operation of the Services API.
     * @param  string  $appointmentId  An Amazon-defined identifier of active service job appointment.
     * @param  SetAppointmentFulfillmentDataRequest  $setAppointmentFulfillmentDataRequest  Input for set appointment fulfillment data operation.
     */
    public function __construct(
        protected string $serviceJobId,
        protected string $appointmentId,
        public SetAppointmentFulfillmentDataRequest $setAppointmentFulfillmentDataRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/service/v1/serviceJobs/{$this->serviceJobId}/appointments/{$this->appointmentId}/fulfillment";
    }

    public function createDtoFromResponse(Response $response): EmptyResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            204 => EmptyResponse::class,
            400, 403, 404, 413, 415, 422, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->setAppointmentFulfillmentDataRequest->toArray();
    }
}
