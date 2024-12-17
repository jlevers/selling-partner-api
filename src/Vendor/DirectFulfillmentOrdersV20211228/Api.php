<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Dto\SubmitAcknowledgementRequest;
use SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Requests\GetOrder;
use SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Requests\GetOrders;
use SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Requests\SubmitAcknowledgement;

class Api extends BaseResource
{
    /**
     * @param  \DateTimeInterface  $createdAfter  Purchase orders that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format.
     * @param  \DateTimeInterface  $createdBefore  Purchase orders that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format.
     * @param  ?string  $shipFromPartyId  The vendor warehouse identifier for the fulfillment warehouse. If not specified, the result will contain orders for all warehouses.
     * @param  ?string  $status  Returns only the purchase orders that match the specified status. If not specified, the result will contain orders that match any status.
     * @param  ?int  $limit  The limit to the number of purchase orders returned.
     * @param  ?string  $sortOrder  Sort the list in ascending or descending order by order creation date.
     * @param  ?string  $nextToken  Used for pagination when there are more orders than the specified result size limit. The token value is returned in the previous API call.
     * @param  ?string  $includeDetails  When true, returns the complete purchase order details. Otherwise, only purchase order numbers are returned.
     */
    public function getOrders(
        \DateTimeInterface $createdAfter,
        \DateTimeInterface $createdBefore,
        ?string $shipFromPartyId = null,
        ?string $status = null,
        ?int $limit = null,
        ?string $sortOrder = null,
        ?string $nextToken = null,
        ?string $includeDetails = null,
    ): Response {
        $request = new GetOrders($createdAfter, $createdBefore, $shipFromPartyId, $status, $limit, $sortOrder, $nextToken, $includeDetails);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $purchaseOrderNumber  The order identifier for the purchase order that you want. Formatting Notes: alpha-numeric code.
     */
    public function getOrder(string $purchaseOrderNumber): Response
    {
        $request = new GetOrder($purchaseOrderNumber);

        return $this->connector->send($request);
    }

    /**
     * @param  SubmitAcknowledgementRequest  $submitAcknowledgementRequest  The request schema for the submitAcknowledgement operation.
     */
    public function submitAcknowledgement(SubmitAcknowledgementRequest $submitAcknowledgementRequest): Response
    {
        $request = new SubmitAcknowledgement($submitAcknowledgementRequest);

        return $this->connector->send($request);
    }
}
