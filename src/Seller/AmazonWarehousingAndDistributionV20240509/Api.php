<?php

namespace SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Dto\InboundOrder;
use SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Dto\InboundOrderCreationData;
use SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Dto\InboundPackages;
use SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Dto\TransportationDetails;
use SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Requests\CancelInbound;
use SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Requests\CheckInboundEligibility;
use SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Requests\ConfirmInbound;
use SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Requests\CreateInbound;
use SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Requests\GetInbound;
use SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Requests\GetInboundShipment;
use SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Requests\GetInboundShipmentLabels;
use SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Requests\ListInboundShipments;
use SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Requests\ListInventory;
use SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Requests\UpdateInbound;
use SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Requests\UpdateInboundShipmentTransportDetails;

class Api extends BaseResource
{
    /**
     * @param  InboundOrderCreationData  $inboundOrderCreationData  Payload for creating an inbound order.
     */
    public function createInbound(InboundOrderCreationData $inboundOrderCreationData): Response
    {
        $request = new CreateInbound($inboundOrderCreationData);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $orderId  The ID of the inbound order that you want to retrieve.
     */
    public function getInbound(string $orderId): Response
    {
        $request = new GetInbound($orderId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $orderId  The ID of the inbound order that you want to update.
     * @param  InboundOrder  $inboundOrder  Represents an AWD inbound order.
     */
    public function updateInbound(string $orderId, InboundOrder $inboundOrder): Response
    {
        $request = new UpdateInbound($orderId, $inboundOrder);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $orderId  The ID of the inbound order you want to cancel.
     */
    public function cancelInbound(string $orderId): Response
    {
        $request = new CancelInbound($orderId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $orderId  The ID of the inbound order that you want to confirm.
     */
    public function confirmInbound(string $orderId): Response
    {
        $request = new ConfirmInbound($orderId);

        return $this->connector->send($request);
    }

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
     * @param  string  $shipmentId  ID for the shipment.
     * @param  ?string  $pageType  Page type for the generated labels. The default is `PLAIN_PAPER`.
     * @param  ?string  $formatType  The format type of the output file that contains your labels. The default format type is `PDF`.
     */
    public function getInboundShipmentLabels(
        string $shipmentId,
        ?string $pageType = null,
        ?string $formatType = null,
    ): Response {
        $request = new GetInboundShipmentLabels($shipmentId, $pageType, $formatType);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $shipmentId  The shipment ID.
     * @param  TransportationDetails  $transportationDetails  Transportation details for the shipment.
     */
    public function updateInboundShipmentTransportDetails(
        string $shipmentId,
        TransportationDetails $transportationDetails,
    ): Response {
        $request = new UpdateInboundShipmentTransportDetails($shipmentId, $transportationDetails);

        return $this->connector->send($request);
    }

    /**
     * @param  InboundPackages  $inboundPackages  Represents the packages to inbound.
     */
    public function checkInboundEligibility(InboundPackages $inboundPackages): Response
    {
        $request = new CheckInboundEligibility($inboundPackages);

        return $this->connector->send($request);
    }

    /**
     * @param  ?string  $sortBy  Field to sort results by. By default, the response will be sorted by UPDATED_AT.
     * @param  ?string  $sortOrder  Sort the response in ASCENDING or DESCENDING order. By default, the response will be sorted in DESCENDING order.
     * @param  ?string  $shipmentStatus  Filter by inbound shipment status.
     * @param  ?\DateTimeInterface  $updatedAfter  List the inbound shipments that were updated after a certain time (inclusive). The date must be in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> format.
     * @param  ?\DateTimeInterface  $updatedBefore  List the inbound shipments that were updated before a certain time (inclusive). The date must be in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> format.
     * @param  ?int  $maxResults  Maximum number of results to return.
     * @param  ?string  $nextToken  A token that is used to retrieve the next page of results. The response includes `nextToken` when the number of results exceeds the specified `maxResults` value. To get the next page of results, call the operation with this token and include the same arguments as the call that produced the token. To get a complete list, call this operation until `nextToken` is null. Note that this operation can return empty pages.
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
     * @param  ?string  $nextToken  A token that is used to retrieve the next page of results. The response includes `nextToken` when the number of results exceeds the specified `maxResults` value. To get the next page of results, call the operation with this token and include the same arguments as the call that produced the token. To get a complete list, call this operation until `nextToken` is null. Note that this operation can return empty pages.
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
