<?php

namespace SellingPartnerApi\Seller\ServicesV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\ServicesV1\Dto\FixedSlotCapacityQuery;
use SellingPartnerApi\Seller\ServicesV1\Responses\FixedSlotCapacity;
use SellingPartnerApi\Seller\ServicesV1\Responses\FixedSlotCapacityErrors;

/**
 * getFixedSlotCapacity
 */
class GetFixedSlotCapacity extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $resourceId  Resource Identifier.
     * @param  FixedSlotCapacityQuery  $fixedSlotCapacityQuery  Request schema for the `getFixedSlotCapacity` operation. This schema is used to define the time range, capacity types and slot duration which are being queried.
     * @param  array  $marketplaceIds  An identifier for the marketplace in which the resource operates.
     * @param  ?string  $nextPageToken  Next page token returned in the response of your previous request.
     */
    public function __construct(
        protected string $resourceId,
        public FixedSlotCapacityQuery $fixedSlotCapacityQuery,
        protected array $marketplaceIds,
        protected ?string $nextPageToken = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['marketplaceIds' => $this->marketplaceIds, 'nextPageToken' => $this->nextPageToken]);
    }

    public function resolveEndpoint(): string
    {
        return "/service/v1/serviceResources/{$this->resourceId}/capacity/fixed";
    }

    public function createDtoFromResponse(Response $response): FixedSlotCapacity|FixedSlotCapacityErrors
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => FixedSlotCapacity::class,
            400, 401, 403, 404, 413, 415, 429, 500, 503 => FixedSlotCapacityErrors::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->fixedSlotCapacityQuery->toArray();
    }
}
