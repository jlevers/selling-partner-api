<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Dto\SubmitAcknowledgementRequest;
use SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Requests\GetOrder;
use SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Requests\GetOrders;
use SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Requests\SubmitAcknowledgement;

class Api extends BaseResource
{
    /**
     * @param  string  $createdAfter Purchase orders that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format.
     * @param  string  $createdBefore Purchase orders that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format.
     * @param  string|null  $shipFromPartyId The vendor warehouse identifier for the fulfillment warehouse. If not specified, the result will contain orders for all warehouses.
     * @param  string|null  $status Returns only the purchase orders that match the specified status. If not specified, the result will contain orders that match any status.
     * @param  int|null  $limit The limit to the number of purchase orders returned.
     * @param  string|null  $sortOrder Sort the list in ascending or descending order by order creation date.
     * @param  string|null  $nextToken Used for pagination when there are more orders than the specified result size limit. The token value is returned in the previous API call.
     * @param  string|null  $includeDetails When true, returns the complete purchase order details. Otherwise, only purchase order numbers are returned.
     */
    public function getOrders(
        string $createdAfter,
        string $createdBefore,
        ?string $shipFromPartyId = null,
        ?string $status = null,
        ?int $limit = null,
        ?string $sortOrder = null,
        ?string $nextToken = null,
        ?string $includeDetails = null,
    ): Response {
        return $this->connector->send(new GetOrders($createdAfter, $createdBefore, $shipFromPartyId, $status, $limit, $sortOrder, $nextToken, $includeDetails));
    }

    /**
     * @param  string  $purchaseOrderNumber The order identifier for the purchase order that you want. Formatting Notes: alpha-numeric code.
     */
    public function getOrder(string $purchaseOrderNumber): Response
    {
        return $this->connector->send(new GetOrder($purchaseOrderNumber));
    }

    /**
     * @param  SubmitAcknowledgementRequest  $submitAcknowledgementRequest The request schema for the submitAcknowledgement operation.
     */
    public function submitAcknowledgement(SubmitAcknowledgementRequest $submitAcknowledgementRequest): Response
    {
        return $this->connector->send(new SubmitAcknowledgement($submitAcknowledgementRequest));
    }
}
