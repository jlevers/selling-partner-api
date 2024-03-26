<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Middleware\RestrictedDataToken;
use SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Responses\ErrorList;
use SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Responses\OrderList;

/**
 * getOrders
 */
class GetOrders extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  DateTime  $createdAfter  Purchase orders that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format.
     * @param  DateTime  $createdBefore  Purchase orders that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format.
     * @param  ?string  $shipFromPartyId  The vendor warehouse identifier for the fulfillment warehouse. If not specified, the result will contain orders for all warehouses.
     * @param  ?string  $status  Returns only the purchase orders that match the specified status. If not specified, the result will contain orders that match any status.
     * @param  ?int  $limit  The limit to the number of purchase orders returned.
     * @param  ?string  $sortOrder  Sort the list in ascending or descending order by order creation date.
     * @param  ?string  $nextToken  Used for pagination when there are more orders than the specified result size limit. The token value is returned in the previous API call.
     * @param  ?string  $includeDetails  When true, returns the complete purchase order details. Otherwise, only purchase order numbers are returned.
     */
    public function __construct(
        protected \DateTime $createdAfter,
        protected \DateTime $createdBefore,
        protected ?string $shipFromPartyId = null,
        protected ?string $status = null,
        protected ?int $limit = null,
        protected ?string $sortOrder = null,
        protected ?string $nextToken = null,
        protected ?string $includeDetails = null,
    ) {
        $rdtMiddleware = new RestrictedDataToken('/vendor/directFulfillment/orders/2021-12-28/purchaseOrders', 'GET', []);
        $this->middleware()->onRequest($rdtMiddleware);
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'createdAfter' => $this->createdAfter?->format(\DateTime::RFC3339),
            'createdBefore' => $this->createdBefore?->format(\DateTime::RFC3339),
            'shipFromPartyId' => $this->shipFromPartyId,
            'status' => $this->status,
            'limit' => $this->limit,
            'sortOrder' => $this->sortOrder,
            'nextToken' => $this->nextToken,
            'includeDetails' => $this->includeDetails,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return '/vendor/directFulfillment/orders/2021-12-28/purchaseOrders';
    }

    public function createDtoFromResponse(Response $response): OrderList|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => OrderList::class,
            400, 403, 404, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
