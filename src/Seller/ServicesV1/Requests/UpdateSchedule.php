<?php

namespace SellingPartnerApi\Seller\ServicesV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\ServicesV1\Dto\UpdateScheduleRequest;
use SellingPartnerApi\Seller\ServicesV1\Responses\UpdateScheduleResponse;

/**
 * updateSchedule
 */
class UpdateSchedule extends Request
{
    protected Method $method = Method::PUT;

    /**
     * @param  string  $resourceId  Resource (store) Identifier
     * @param  UpdateScheduleRequest  $updateScheduleRequest  Request schema for the `updateSchedule` operation.
     * @param  array  $marketplaceIds  An identifier for the marketplace in which the resource operates.
     */
    public function __construct(
        protected string $resourceId,
        public UpdateScheduleRequest $updateScheduleRequest,
        protected array $marketplaceIds,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['marketplaceIds' => $this->marketplaceIds]);
    }

    public function resolveEndpoint(): string
    {
        return "/service/v1/serviceResources/{$this->resourceId}/schedules";
    }

    public function createDtoFromResponse(Response $response): UpdateScheduleResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 403, 404, 413, 415, 429, 500, 503 => UpdateScheduleResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->updateScheduleRequest->toArray();
    }
}
