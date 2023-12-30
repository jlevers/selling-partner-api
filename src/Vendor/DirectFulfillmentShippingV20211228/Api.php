<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto\CreateShippingLabelsRequest;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto\SubmitShipmentConfirmationsRequest;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto\SubmitShipmentStatusUpdatesRequest;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto\SubmitShippingLabelsRequest;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Requests\CreateShippingLabels;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Requests\GetCustomerInvoice;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Requests\GetCustomerInvoices;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Requests\GetPackingSlip;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Requests\GetPackingSlips;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Requests\GetShippingLabel;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Requests\GetShippingLabels;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Requests\SubmitShipmentConfirmations;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Requests\SubmitShipmentStatusUpdates;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Requests\SubmitShippingLabelRequest;

class Api extends BaseResource
{
    /**
     * @param  string  $createdAfter Shipping labels that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format.
     * @param  string  $createdBefore Shipping labels that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format.
     * @param  string|null  $shipFromPartyId The vendor warehouseId for order fulfillment. If not specified, the result will contain orders for all warehouses.
     * @param  int|null  $limit The limit to the number of records returned.
     * @param  string|null  $sortOrder Sort ASC or DESC by order creation date.
     * @param  string|null  $nextToken Used for pagination when there are more ship labels than the specified result size limit. The token value is returned in the previous API call.
     */
    public function getShippingLabels(
        string $createdAfter,
        string $createdBefore,
        ?string $shipFromPartyId = null,
        ?int $limit = null,
        ?string $sortOrder = null,
        ?string $nextToken = null,
    ): Response {
        return $this->connector->send(new GetShippingLabels($createdAfter, $createdBefore, $shipFromPartyId, $limit, $sortOrder, $nextToken));
    }

    public function submitShippingLabelRequest(SubmitShippingLabelsRequest $submitShippingLabelsRequest): Response
    {
        return $this->connector->send(new SubmitShippingLabelRequest($submitShippingLabelsRequest));
    }

    /**
     * @param  string  $purchaseOrderNumber The purchase order number for which you want to return the shipping label. It should be the same purchaseOrderNumber as received in the order.
     */
    public function getShippingLabel(string $purchaseOrderNumber): Response
    {
        return $this->connector->send(new GetShippingLabel($purchaseOrderNumber));
    }

    /**
     * @param  string  $purchaseOrderNumber The purchase order number for which you want to return the shipping labels. It should be the same purchaseOrderNumber as received in the order.
     * @param  CreateShippingLabelsRequest  $createShippingLabelsRequest The request body for the createShippingLabels operation.
     */
    public function createShippingLabels(
        string $purchaseOrderNumber,
        CreateShippingLabelsRequest $createShippingLabelsRequest,
    ): Response {
        return $this->connector->send(new CreateShippingLabels($purchaseOrderNumber, $createShippingLabelsRequest));
    }

    public function submitShipmentConfirmations(
        SubmitShipmentConfirmationsRequest $submitShipmentConfirmationsRequest,
    ): Response {
        return $this->connector->send(new SubmitShipmentConfirmations($submitShipmentConfirmationsRequest));
    }

    public function submitShipmentStatusUpdates(
        SubmitShipmentStatusUpdatesRequest $submitShipmentStatusUpdatesRequest,
    ): Response {
        return $this->connector->send(new SubmitShipmentStatusUpdates($submitShipmentStatusUpdatesRequest));
    }

    /**
     * @param  string  $createdAfter Orders that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format.
     * @param  string  $createdBefore Orders that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format.
     * @param  string|null  $shipFromPartyId The vendor warehouseId for order fulfillment. If not specified, the result will contain orders for all warehouses.
     * @param  int|null  $limit The limit to the number of records returned
     * @param  string|null  $sortOrder Sort ASC or DESC by order creation date.
     * @param  string|null  $nextToken Used for pagination when there are more orders than the specified result size limit. The token value is returned in the previous API call.
     */
    public function getCustomerInvoices(
        string $createdAfter,
        string $createdBefore,
        ?string $shipFromPartyId = null,
        ?int $limit = null,
        ?string $sortOrder = null,
        ?string $nextToken = null,
    ): Response {
        return $this->connector->send(new GetCustomerInvoices($createdAfter, $createdBefore, $shipFromPartyId, $limit, $sortOrder, $nextToken));
    }

    /**
     * @param  string  $purchaseOrderNumber Purchase order number of the shipment for which to return the invoice.
     */
    public function getCustomerInvoice(string $purchaseOrderNumber): Response
    {
        return $this->connector->send(new GetCustomerInvoice($purchaseOrderNumber));
    }

    /**
     * @param  string  $createdAfter Packing slips that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format.
     * @param  string  $createdBefore Packing slips that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format.
     * @param  string|null  $shipFromPartyId The vendor warehouseId for order fulfillment. If not specified the result will contain orders for all warehouses.
     * @param  int|null  $limit The limit to the number of records returned
     * @param  string|null  $sortOrder Sort ASC or DESC by packing slip creation date.
     * @param  string|null  $nextToken Used for pagination when there are more packing slips than the specified result size limit. The token value is returned in the previous API call.
     */
    public function getPackingSlips(
        string $createdAfter,
        string $createdBefore,
        ?string $shipFromPartyId = null,
        ?int $limit = null,
        ?string $sortOrder = null,
        ?string $nextToken = null,
    ): Response {
        return $this->connector->send(new GetPackingSlips($createdAfter, $createdBefore, $shipFromPartyId, $limit, $sortOrder, $nextToken));
    }

    /**
     * @param  string  $purchaseOrderNumber The purchaseOrderNumber for the packing slip you want.
     */
    public function getPackingSlip(string $purchaseOrderNumber): Response
    {
        return $this->connector->send(new GetPackingSlip($purchaseOrderNumber));
    }
}
