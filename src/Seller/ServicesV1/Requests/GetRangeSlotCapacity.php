<?php

namespace SellingPartnerApi\Seller\ServicesV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\ServicesV1\Dto\RangeSlotCapacityQuery;
use SellingPartnerApi\Seller\ServicesV1\Responses\RangeSlotCapacity;
use SellingPartnerApi\Seller\ServicesV1\Responses\RangeSlotCapacityErrors;

/**
 * getRangeSlotCapacity
 */
class GetRangeSlotCapacity extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $resourceId  Resource Identifier.
     * @param  RangeSlotCapacityQuery  $rangeSlotCapacityQuery  Request schema for the `getRangeSlotCapacity` operation. This schema is used to define the time range and capacity types that are being queried.
     * @param  array  $marketplaceIds  An identifier for the marketplace in which the resource operates.
     * @param  ?string  $nextPageToken  Next page token returned in the response of your previous request.
     */
    public function __construct(
        protected string $resourceId,
        public RangeSlotCapacityQuery $rangeSlotCapacityQuery,
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
        return "/service/v1/serviceResources/{$this->resourceId}/capacity/range";
    }

    public function createDtoFromResponse(Response $response): RangeSlotCapacity|RangeSlotCapacityErrors
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => RangeSlotCapacity::class,
            400, 401, 403, 404, 413, 415, 429, 500, 503 => RangeSlotCapacityErrors::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->rangeSlotCapacityQuery->toArray();
    }
}
