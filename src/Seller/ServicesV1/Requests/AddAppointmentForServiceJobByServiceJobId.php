<?php

namespace SellingPartnerApi\Seller\ServicesV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\ServicesV1\Dto\AddAppointmentRequest;
use SellingPartnerApi\Seller\ServicesV1\Responses\SetAppointmentResponse;

/**
 * addAppointmentForServiceJobByServiceJobId
 */
class AddAppointmentForServiceJobByServiceJobId extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $serviceJobId  An Amazon defined service job identifier.
     * @param  AddAppointmentRequest  $addAppointmentRequest  Input for add appointment operation.
     */
    public function __construct(
        protected string $serviceJobId,
        public AddAppointmentRequest $addAppointmentRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/service/v1/serviceJobs/{$this->serviceJobId}/appointments";
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
        return $this->addAppointmentRequest->toArray();
    }
}
