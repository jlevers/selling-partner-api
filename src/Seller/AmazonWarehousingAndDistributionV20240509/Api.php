<?php

namespace SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Requests\GetInboundShipment;
use SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Requests\ListInboundShipments;
use SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Requests\ListInventory;

class Api extends BaseResource
{
    /**
     * @param  string  $shipmentId  ID for the shipment. A shipment contains the cases being inbounded.
     * @param  ?string  $skuQuantities  If equal to `SHOW`, the response includes the shipment SKU quantity details.
     *
     * Defaults to `HIDE`, in which case the response does not contain SKU quantities
     */
    public function getInboundShipment(string $shipmentId, ?string $skuQuantities = null): Response
    {
        $request = new GetInboundShipment($shipmentId, $skuQuantities);

        return $this->connector->send($request);
    }

    /**
     * @param  ?string  $sortBy  Field to sort results by. By default, the response will be sorted by UPDATED_AT.
     * @param  ?string  $sortOrder  Sort the response in ASCENDING or DESCENDING order. By default, the response will be sorted in DESCENDING order.
     * @param  ?string  $shipmentStatus  Filter by inbound shipment status.
     * @param  ?\DateTimeInterface  $updatedAfter  List the inbound shipments that were updated after a certain time (inclusive). The date must be in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> format.
     * @param  ?\DateTimeInterface  $updatedBefore  List the inbound shipments that were updated before a certain time (inclusive). The date must be in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> format.
     * @param  ?int  $maxResults  Maximum number of results to return.
     * @param  ?string  $nextToken  Token to retrieve the next set of paginated results.
     */
    public function listInboundShipments(
        ?string $sortBy = null,
        ?string $sortOrder = null,
        ?string $shipmentStatus = null,
        ?\DateTimeInterface $updatedAfter = null,
        ?\DateTimeInterface $updatedBefore = null,
        ?int $maxResults = null,
        ?string $nextToken = null,
    ): Response {
        $request = new ListInboundShipments($sortBy, $sortOrder, $shipmentStatus, $updatedAfter, $updatedBefore, $maxResults, $nextToken);

        return $this->connector->send($request);
    }

    /**
     * @param  ?string  $sku  Filter by seller or merchant SKU for the item.
     * @param  ?string  $sortOrder  Sort the response in `ASCENDING` or `DESCENDING` order.
     * @param  ?string  $details  Set to `SHOW` to return summaries with additional inventory details. Defaults to `HIDE,` which returns only inventory summary totals.
     * @param  ?string  $nextToken  Token to retrieve the next set of paginated results.
     * @param  ?int  $maxResults  Maximum number of results to return.
     */
    public function listInventory(
        ?string $sku = null,
        ?string $sortOrder = null,
        ?string $details = null,
        ?string $nextToken = null,
        ?int $maxResults = null,
    ): Response {
        $request = new ListInventory($sku, $sortOrder, $details, $nextToken, $maxResults);

        return $this->connector->send($request);
    }
}
