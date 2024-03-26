<?php

namespace SellingPartnerApi\Vendor\OrdersV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Vendor\OrdersV1\Responses\GetPurchaseOrdersResponse;

/**
 * getPurchaseOrders
 */
class GetPurchaseOrders extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  ?int  $limit  The limit to the number of records returned. Default value is 100 records.
     * @param  ?DateTime  $createdAfter  Purchase orders that became available after this time will be included in the result. Must be in ISO-8601 date/time format.
     * @param  ?DateTime  $createdBefore  Purchase orders that became available before this time will be included in the result. Must be in ISO-8601 date/time format.
     * @param  ?string  $sortOrder  Sort in ascending or descending order by purchase order creation date.
     * @param  ?string  $nextToken  Used for pagination when there is more purchase orders than the specified result size limit. The token value is returned in the previous API call
     * @param  ?string  $includeDetails  When true, returns purchase orders with complete details. Otherwise, only purchase order numbers are returned. Default value is true.
     * @param  ?DateTime  $changedAfter  Purchase orders that changed after this timestamp will be included in the result. Must be in ISO-8601 date/time format.
     * @param  ?DateTime  $changedBefore  Purchase orders that changed before this timestamp will be included in the result. Must be in ISO-8601 date/time format.
     * @param  ?string  $poItemState  Current state of the purchase order item. If this value is Cancelled, this API will return purchase orders which have one or more items cancelled by Amazon with updated item quantity as zero.
     * @param  ?string  $isPoChanged  When true, returns purchase orders which were modified after the order was placed. Vendors are required to pull the changed purchase order and fulfill the updated purchase order and not the original one. Default value is false.
     * @param  ?string  $purchaseOrderState  Filters purchase orders based on the purchase order state.
     * @param  ?string  $orderingVendorCode  Filters purchase orders based on the specified ordering vendor code. This value should be same as 'sellingParty.partyId' in the purchase order. If not included in the filter, all purchase orders for all of the vendor codes that exist in the vendor group used to authorize the API client application are returned.
     */
    public function __construct(
        protected ?int $limit = null,
        protected ?\DateTime $createdAfter = null,
        protected ?\DateTime $createdBefore = null,
        protected ?string $sortOrder = null,
        protected ?string $nextToken = null,
        protected ?string $includeDetails = null,
        protected ?\DateTime $changedAfter = null,
        protected ?\DateTime $changedBefore = null,
        protected ?string $poItemState = null,
        protected ?string $isPoChanged = null,
        protected ?string $purchaseOrderState = null,
        protected ?string $orderingVendorCode = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'limit' => $this->limit,
            'createdAfter' => $this->createdAfter?->format(\DateTime::RFC3339),
            'createdBefore' => $this->createdBefore?->format(\DateTime::RFC3339),
            'sortOrder' => $this->sortOrder,
            'nextToken' => $this->nextToken,
            'includeDetails' => $this->includeDetails,
            'changedAfter' => $this->changedAfter?->format(\DateTime::RFC3339),
            'changedBefore' => $this->changedBefore?->format(\DateTime::RFC3339),
            'poItemState' => $this->poItemState,
            'isPOChanged' => $this->isPoChanged,
            'purchaseOrderState' => $this->purchaseOrderState,
            'orderingVendorCode' => $this->orderingVendorCode,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return '/vendor/orders/v1/purchaseOrders';
    }

    public function createDtoFromResponse(Response $response): GetPurchaseOrdersResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 403, 404, 415, 429, 500, 503 => GetPurchaseOrdersResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
