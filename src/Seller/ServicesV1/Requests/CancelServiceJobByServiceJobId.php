<?php

namespace SellingPartnerApi\Seller\ServicesV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\ServicesV1\Responses\CancelServiceJobByServiceJobIdResponse;

/**
 * cancelServiceJobByServiceJobId
 */
class CancelServiceJobByServiceJobId extends Request
{
    protected Method $method = Method::PUT;

    /**
     * @param  string  $serviceJobId  An Amazon defined service job identifier.
     * @param  string  $cancellationReasonCode  A cancel reason code that specifies the reason for cancelling a service job.
     */
    public function __construct(
        protected string $serviceJobId,
        protected string $cancellationReasonCode,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['cancellationReasonCode' => $this->cancellationReasonCode]);
    }

    public function resolveEndpoint(): string
    {
        return "/service/v1/serviceJobs/{$this->serviceJobId}/cancellations";
    }

    public function createDtoFromResponse(Response $response): CancelServiceJobByServiceJobIdResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 403, 404, 413, 415, 422, 429, 500, 503 => CancelServiceJobByServiceJobIdResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
