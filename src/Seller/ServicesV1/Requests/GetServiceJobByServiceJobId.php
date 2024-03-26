<?php

namespace SellingPartnerApi\Seller\ServicesV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\ServicesV1\Responses\GetServiceJobByServiceJobIdResponse;

/**
 * getServiceJobByServiceJobId
 */
class GetServiceJobByServiceJobId extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $serviceJobId  A service job identifier.
     */
    public function __construct(
        protected string $serviceJobId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/service/v1/serviceJobs/{$this->serviceJobId}";
    }

    public function createDtoFromResponse(Response $response): GetServiceJobByServiceJobIdResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 403, 404, 413, 415, 422, 429, 500, 503 => GetServiceJobByServiceJobIdResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
