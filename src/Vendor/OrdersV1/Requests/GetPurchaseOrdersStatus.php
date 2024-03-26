<?php

namespace SellingPartnerApi\Vendor\OrdersV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Vendor\OrdersV1\Responses\GetPurchaseOrdersStatusResponse;

/**
 * getPurchaseOrdersStatus
 */
class GetPurchaseOrdersStatus extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  ?int  $limit  The limit to the number of records returned. Default value is 100 records.
     * @param  ?string  $sortOrder  Sort in ascending or descending order by purchase order creation date.
     * @param  ?string  $nextToken  Used for pagination when there are more purchase orders than the specified result size limit.
     * @param  ?DateTime  $createdAfter  Purchase orders that became available after this timestamp will be included in the result. Must be in ISO-8601 date/time format.
     * @param  ?DateTime  $createdBefore  Purchase orders that became available before this timestamp will be included in the result. Must be in ISO-8601 date/time format.
     * @param  ?DateTime  $updatedAfter  Purchase orders for which the last purchase order update happened after this timestamp will be included in the result. Must be in ISO-8601 date/time format.
     * @param  ?DateTime  $updatedBefore  Purchase orders for which the last purchase order update happened before this timestamp will be included in the result. Must be in ISO-8601 date/time format.
     * @param  ?string  $purchaseOrderNumber  Provides purchase order status for the specified purchase order number.
     * @param  ?string  $purchaseOrderStatus  Filters purchase orders based on the specified purchase order status. If not included in filter, this will return purchase orders for all statuses.
     * @param  ?string  $itemConfirmationStatus  Filters purchase orders based on their item confirmation status. If the item confirmation status is not included in the filter, purchase orders for all confirmation statuses are included.
     * @param  ?string  $itemReceiveStatus  Filters purchase orders based on the purchase order's item receive status. If the item receive status is not included in the filter, purchase orders for all receive statuses are included.
     * @param  ?string  $orderingVendorCode  Filters purchase orders based on the specified ordering vendor code. This value should be same as 'sellingParty.partyId' in the purchase order. If not included in filter, all purchase orders for all the vendor codes that exist in the vendor group used to authorize API client application are returned.
     * @param  ?string  $shipToPartyId  Filters purchase orders for a specific buyer's Fulfillment Center/warehouse by providing ship to location id here. This value should be same as 'shipToParty.partyId' in the purchase order. If not included in filter, this will return purchase orders for all the buyer's warehouses used for vendor group purchase orders.
     */
    public function __construct(
        protected ?int $limit = null,
        protected ?string $sortOrder = null,
        protected ?string $nextToken = null,
        protected ?\DateTime $createdAfter = null,
        protected ?\DateTime $createdBefore = null,
        protected ?\DateTime $updatedAfter = null,
        protected ?\DateTime $updatedBefore = null,
        protected ?string $purchaseOrderNumber = null,
        protected ?string $purchaseOrderStatus = null,
        protected ?string $itemConfirmationStatus = null,
        protected ?string $itemReceiveStatus = null,
        protected ?string $orderingVendorCode = null,
        protected ?string $shipToPartyId = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'limit' => $this->limit,
            'sortOrder' => $this->sortOrder,
            'nextToken' => $this->nextToken,
            'createdAfter' => $this->createdAfter?->format(\DateTime::RFC3339),
            'createdBefore' => $this->createdBefore?->format(\DateTime::RFC3339),
            'updatedAfter' => $this->updatedAfter?->format(\DateTime::RFC3339),
            'updatedBefore' => $this->updatedBefore?->format(\DateTime::RFC3339),
            'purchaseOrderNumber' => $this->purchaseOrderNumber,
            'purchaseOrderStatus' => $this->purchaseOrderStatus,
            'itemConfirmationStatus' => $this->itemConfirmationStatus,
            'itemReceiveStatus' => $this->itemReceiveStatus,
            'orderingVendorCode' => $this->orderingVendorCode,
            'shipToPartyId' => $this->shipToPartyId,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return '/vendor/orders/v1/purchaseOrdersStatus';
    }

    public function createDtoFromResponse(Response $response): GetPurchaseOrdersStatusResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 403, 404, 415, 429, 500, 503 => GetPurchaseOrdersStatusResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
