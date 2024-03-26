<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Middleware\RestrictedDataToken;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Responses\ErrorList;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Responses\PackingSlipList;

/**
 * getPackingSlips
 */
class GetPackingSlips extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  DateTime  $createdAfter  Packing slips that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format.
     * @param  DateTime  $createdBefore  Packing slips that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format.
     * @param  ?string  $shipFromPartyId  The vendor warehouseId for order fulfillment. If not specified the result will contain orders for all warehouses.
     * @param  ?int  $limit  The limit to the number of records returned
     * @param  ?string  $sortOrder  Sort ASC or DESC by packing slip creation date.
     * @param  ?string  $nextToken  Used for pagination when there are more packing slips than the specified result size limit. The token value is returned in the previous API call.
     */
    public function __construct(
        protected \DateTime $createdAfter,
        protected \DateTime $createdBefore,
        protected ?string $shipFromPartyId = null,
        protected ?int $limit = null,
        protected ?string $sortOrder = null,
        protected ?string $nextToken = null,
    ) {
        $rdtMiddleware = new RestrictedDataToken('/vendor/directFulfillment/shipping/2021-12-28/packingSlips', 'GET', []);
        $this->middleware()->onRequest($rdtMiddleware);
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'createdAfter' => $this->createdAfter?->format(\DateTime::RFC3339),
            'createdBefore' => $this->createdBefore?->format(\DateTime::RFC3339),
            'shipFromPartyId' => $this->shipFromPartyId,
            'limit' => $this->limit,
            'sortOrder' => $this->sortOrder,
            'nextToken' => $this->nextToken,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return '/vendor/directFulfillment/shipping/2021-12-28/packingSlips';
    }

    public function createDtoFromResponse(Response $response): PackingSlipList|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => PackingSlipList::class,
            400, 401, 403, 404, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
