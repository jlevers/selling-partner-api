<?php

namespace SellingPartnerApi\Vendor\OrdersV1;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Vendor\OrdersV1\Dto\SubmitAcknowledgementRequest;
use SellingPartnerApi\Vendor\OrdersV1\Requests\GetPurchaseOrder;
use SellingPartnerApi\Vendor\OrdersV1\Requests\GetPurchaseOrders;
use SellingPartnerApi\Vendor\OrdersV1\Requests\GetPurchaseOrdersStatus;
use SellingPartnerApi\Vendor\OrdersV1\Requests\SubmitAcknowledgement;

class Api extends BaseResource
{
    /**
     * @param  ?int  $limit  The limit to the number of records returned. Default value is 100 records.
     * @param  ?\DateTimeInterface  $createdAfter  Purchase orders that became available after this time will be included in the result. Must be in ISO-8601 date/time format.
     * @param  ?\DateTimeInterface  $createdBefore  Purchase orders that became available before this time will be included in the result. Must be in ISO-8601 date/time format.
     * @param  ?string  $sortOrder  Sort in ascending or descending order by purchase order creation date.
     * @param  ?string  $nextToken  Used for pagination when there is more purchase orders than the specified result size limit. The token value is returned in the previous API call
     * @param  ?string  $includeDetails  When true, returns purchase orders with complete details. Otherwise, only purchase order numbers are returned. Default value is true.
     * @param  ?\DateTimeInterface  $changedAfter  Purchase orders that changed after this timestamp will be included in the result. Must be in ISO-8601 date/time format.
     * @param  ?\DateTimeInterface  $changedBefore  Purchase orders that changed before this timestamp will be included in the result. Must be in ISO-8601 date/time format.
     * @param  ?string  $poItemState  Current state of the purchase order item. If this value is Cancelled, this API will return purchase orders which have one or more items cancelled by Amazon with updated item quantity as zero.
     * @param  ?string  $isPoChanged  When true, returns purchase orders which were modified after the order was placed. Vendors are required to pull the changed purchase order and fulfill the updated purchase order and not the original one. Default value is false.
     * @param  ?string  $purchaseOrderState  Filters purchase orders based on the purchase order state.
     * @param  ?string  $orderingVendorCode  Filters purchase orders based on the specified ordering vendor code. This value should be same as 'sellingParty.partyId' in the purchase order. If not included in the filter, all purchase orders for all of the vendor codes that exist in the vendor group used to authorize the API client application are returned.
     */
    public function getPurchaseOrders(
        ?int $limit = null,
        ?\DateTimeInterface $createdAfter = null,
        ?\DateTimeInterface $createdBefore = null,
        ?string $sortOrder = null,
        ?string $nextToken = null,
        ?string $includeDetails = null,
        ?\DateTimeInterface $changedAfter = null,
        ?\DateTimeInterface $changedBefore = null,
        ?string $poItemState = null,
        ?string $isPoChanged = null,
        ?string $purchaseOrderState = null,
        ?string $orderingVendorCode = null,
    ): Response {
        $request = new GetPurchaseOrders($limit, $createdAfter, $createdBefore, $sortOrder, $nextToken, $includeDetails, $changedAfter, $changedBefore, $poItemState, $isPoChanged, $purchaseOrderState, $orderingVendorCode);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $purchaseOrderNumber  The purchase order identifier for the order that you want. Formatting Notes: 8-character alpha-numeric code.
     */
    public function getPurchaseOrder(string $purchaseOrderNumber): Response
    {
        $request = new GetPurchaseOrder($purchaseOrderNumber);

        return $this->connector->send($request);
    }

    /**
     * @param  SubmitAcknowledgementRequest  $submitAcknowledgementRequest  The request schema for the submitAcknowledgment operation.
     */
    public function submitAcknowledgement(SubmitAcknowledgementRequest $submitAcknowledgementRequest): Response
    {
        $request = new SubmitAcknowledgement($submitAcknowledgementRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  ?int  $limit  The limit to the number of records returned. Default value is 100 records.
     * @param  ?string  $sortOrder  Sort in ascending or descending order by purchase order creation date.
     * @param  ?string  $nextToken  Used for pagination when there are more purchase orders than the specified result size limit.
     * @param  ?\DateTimeInterface  $createdAfter  Purchase orders that became available after this timestamp will be included in the result. Must be in ISO-8601 date/time format.
     * @param  ?\DateTimeInterface  $createdBefore  Purchase orders that became available before this timestamp will be included in the result. Must be in ISO-8601 date/time format.
     * @param  ?\DateTimeInterface  $updatedAfter  Purchase orders for which the last purchase order update happened after this timestamp will be included in the result. Must be in ISO-8601 date/time format.
     * @param  ?\DateTimeInterface  $updatedBefore  Purchase orders for which the last purchase order update happened before this timestamp will be included in the result. Must be in ISO-8601 date/time format.
     * @param  ?string  $purchaseOrderNumber  Provides purchase order status for the specified purchase order number.
     * @param  ?string  $purchaseOrderStatus  Filters purchase orders based on the specified purchase order status. If not included in filter, this will return purchase orders for all statuses.
     * @param  ?string  $itemConfirmationStatus  Filters purchase orders based on their item confirmation status. If the item confirmation status is not included in the filter, purchase orders for all confirmation statuses are included.
     * @param  ?string  $itemReceiveStatus  Filters purchase orders based on the purchase order's item receive status. If the item receive status is not included in the filter, purchase orders for all receive statuses are included.
     * @param  ?string  $orderingVendorCode  Filters purchase orders based on the specified ordering vendor code. This value should be same as 'sellingParty.partyId' in the purchase order. If not included in filter, all purchase orders for all the vendor codes that exist in the vendor group used to authorize API client application are returned.
     * @param  ?string  $shipToPartyId  Filters purchase orders for a specific buyer's Fulfillment Center/warehouse by providing ship to location id here. This value should be same as 'shipToParty.partyId' in the purchase order. If not included in filter, this will return purchase orders for all the buyer's warehouses used for vendor group purchase orders.
     */
    public function getPurchaseOrdersStatus(
        ?int $limit = null,
        ?string $sortOrder = null,
        ?string $nextToken = null,
        ?\DateTimeInterface $createdAfter = null,
        ?\DateTimeInterface $createdBefore = null,
        ?\DateTimeInterface $updatedAfter = null,
        ?\DateTimeInterface $updatedBefore = null,
        ?string $purchaseOrderNumber = null,
        ?string $purchaseOrderStatus = null,
        ?string $itemConfirmationStatus = null,
        ?string $itemReceiveStatus = null,
        ?string $orderingVendorCode = null,
        ?string $shipToPartyId = null,
    ): Response {
        $request = new GetPurchaseOrdersStatus($limit, $sortOrder, $nextToken, $createdAfter, $createdBefore, $updatedAfter, $updatedBefore, $purchaseOrderNumber, $purchaseOrderStatus, $itemConfirmationStatus, $itemReceiveStatus, $orderingVendorCode, $shipToPartyId);

        return $this->connector->send($request);
    }
}
