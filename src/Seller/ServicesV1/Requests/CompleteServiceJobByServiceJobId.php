<?php

namespace SellingPartnerApi\Seller\ServicesV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\ServicesV1\Responses\CompleteServiceJobByServiceJobIdResponse;

/**
 * completeServiceJobByServiceJobId
 */
class CompleteServiceJobByServiceJobId extends Request
{
    protected Method $method = Method::PUT;

    /**
     * @param  string  $serviceJobId  An Amazon defined service job identifier.
     */
    public function __construct(
        protected string $serviceJobId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/service/v1/serviceJobs/{$this->serviceJobId}/completions";
    }

    public function createDtoFromResponse(Response $response): CompleteServiceJobByServiceJobIdResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 403, 404, 413, 415, 422, 429, 500, 503 => CompleteServiceJobByServiceJobIdResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
