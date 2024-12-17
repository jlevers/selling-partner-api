<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\CancelSelfShipAppointmentRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\ConfirmTransportationOptionsRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\CreateInboundPlanRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\CreateMarketplaceItemLabelsRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\GeneratePlacementOptionsRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\GenerateSelfShipAppointmentSlotsRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\GenerateShipmentContentUpdatePreviewsRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\GenerateTransportationOptionsRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\ScheduleSelfShipAppointmentRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\SetPackingInformationRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\SetPrepDetailsRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\UpdateInboundPlanNameRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\UpdateItemComplianceDetailsRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\UpdateShipmentNameRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\UpdateShipmentSourceAddressRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\UpdateShipmentTrackingDetailsRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\CancelInboundPlan;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\CancelSelfShipAppointment;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ConfirmDeliveryWindowOptions;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ConfirmPackingOption;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ConfirmPlacementOption;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ConfirmShipmentContentUpdatePreview;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ConfirmTransportationOptions;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\CreateInboundPlan;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\CreateMarketplaceItemLabels;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\GenerateDeliveryWindowOptions;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\GeneratePackingOptions;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\GeneratePlacementOptions;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\GenerateSelfShipAppointmentSlots;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\GenerateShipmentContentUpdatePreviews;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\GenerateTransportationOptions;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\GetDeliveryChallanDocument;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\GetInboundOperationStatus;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\GetInboundPlan;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\GetSelfShipAppointmentSlots;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\GetShipment;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\GetShipmentContentUpdatePreview;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ListDeliveryWindowOptions;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ListInboundPlanBoxes;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ListInboundPlanItems;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ListInboundPlanPallets;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ListInboundPlans;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ListItemComplianceDetails;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ListPackingGroupBoxes;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ListPackingGroupItems;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ListPackingOptions;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ListPlacementOptions;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ListPrepDetails;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ListShipmentBoxes;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ListShipmentContentUpdatePreviews;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ListShipmentItems;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ListShipmentPallets;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ListTransportationOptions;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ScheduleSelfShipAppointment;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\SetPackingInformation;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\SetPrepDetails;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\UpdateInboundPlanName;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\UpdateItemComplianceDetails;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\UpdateShipmentName;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\UpdateShipmentSourceAddress;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\UpdateShipmentTrackingDetails;

class Api extends BaseResource
{
    /**
     * @param  ?int  $pageSize  The number of inbound plans to return in the response matching the given query.
     * @param  ?string  $paginationToken  A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.
     * @param  ?string  $status  The status of an inbound plan.
     * @param  ?string  $sortBy  Sort by field.
     * @param  ?string  $sortOrder  The sort order.
     */
    public function listInboundPlans(
        ?int $pageSize = null,
        ?string $paginationToken = null,
        ?string $status = null,
        ?string $sortBy = null,
        ?string $sortOrder = null,
    ): Response {
        $request = new ListInboundPlans($pageSize, $paginationToken, $status, $sortBy, $sortOrder);

        return $this->connector->send($request);
    }

    /**
     * @param  CreateInboundPlanRequest  $createInboundPlanRequest  The `createInboundPlan` request.
     */
    public function createInboundPlan(CreateInboundPlanRequest $createInboundPlanRequest): Response
    {
        $request = new CreateInboundPlan($createInboundPlanRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     */
    public function getInboundPlan(string $inboundPlanId): Response
    {
        $request = new GetInboundPlan($inboundPlanId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  ?int  $pageSize  The number of boxes to return in the response matching the given query.
     * @param  ?string  $paginationToken  A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.
     */
    public function listInboundPlanBoxes(
        string $inboundPlanId,
        ?int $pageSize = null,
        ?string $paginationToken = null,
    ): Response {
        $request = new ListInboundPlanBoxes($inboundPlanId, $pageSize, $paginationToken);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     */
    public function cancelInboundPlan(string $inboundPlanId): Response
    {
        $request = new CancelInboundPlan($inboundPlanId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  ?int  $pageSize  The number of items to return in the response matching the given query.
     * @param  ?string  $paginationToken  A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.
     */
    public function listInboundPlanItems(
        string $inboundPlanId,
        ?int $pageSize = null,
        ?string $paginationToken = null,
    ): Response {
        $request = new ListInboundPlanItems($inboundPlanId, $pageSize, $paginationToken);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  UpdateInboundPlanNameRequest  $updateInboundPlanNameRequest  The `updateInboundPlanName` request.
     */
    public function updateInboundPlanName(
        string $inboundPlanId,
        UpdateInboundPlanNameRequest $updateInboundPlanNameRequest,
    ): Response {
        $request = new UpdateInboundPlanName($inboundPlanId, $updateInboundPlanNameRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  string  $packingGroupId  Identifier of a packing group.
     * @param  ?int  $pageSize  The number of packing group boxes to return in the response matching the given query.
     * @param  ?string  $paginationToken  A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.
     */
    public function listPackingGroupBoxes(
        string $inboundPlanId,
        string $packingGroupId,
        ?int $pageSize = null,
        ?string $paginationToken = null,
    ): Response {
        $request = new ListPackingGroupBoxes($inboundPlanId, $packingGroupId, $pageSize, $paginationToken);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  string  $packingGroupId  Identifier of a packing group.
     * @param  ?int  $pageSize  The number of packing group items to return in the response matching the given query.
     * @param  ?string  $paginationToken  A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.
     */
    public function listPackingGroupItems(
        string $inboundPlanId,
        string $packingGroupId,
        ?int $pageSize = null,
        ?string $paginationToken = null,
    ): Response {
        $request = new ListPackingGroupItems($inboundPlanId, $packingGroupId, $pageSize, $paginationToken);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  SetPackingInformationRequest  $setPackingInformationRequest  The `setPackingInformation` request.
     */
    public function setPackingInformation(
        string $inboundPlanId,
        SetPackingInformationRequest $setPackingInformationRequest,
    ): Response {
        $request = new SetPackingInformation($inboundPlanId, $setPackingInformationRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  ?int  $pageSize  The number of packing options to return in the response matching the given query.
     * @param  ?string  $paginationToken  A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.
     */
    public function listPackingOptions(
        string $inboundPlanId,
        ?int $pageSize = null,
        ?string $paginationToken = null,
    ): Response {
        $request = new ListPackingOptions($inboundPlanId, $pageSize, $paginationToken);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     */
    public function generatePackingOptions(string $inboundPlanId): Response
    {
        $request = new GeneratePackingOptions($inboundPlanId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  string  $packingOptionId  Identifier of a packing option.
     */
    public function confirmPackingOption(string $inboundPlanId, string $packingOptionId): Response
    {
        $request = new ConfirmPackingOption($inboundPlanId, $packingOptionId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  ?int  $pageSize  The number of pallets to return in the response matching the given query.
     * @param  ?string  $paginationToken  A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.
     */
    public function listInboundPlanPallets(
        string $inboundPlanId,
        ?int $pageSize = null,
        ?string $paginationToken = null,
    ): Response {
        $request = new ListInboundPlanPallets($inboundPlanId, $pageSize, $paginationToken);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  ?int  $pageSize  The number of placement options to return in the response matching the given query.
     * @param  ?string  $paginationToken  A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.
     */
    public function listPlacementOptions(
        string $inboundPlanId,
        ?int $pageSize = null,
        ?string $paginationToken = null,
    ): Response {
        $request = new ListPlacementOptions($inboundPlanId, $pageSize, $paginationToken);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  GeneratePlacementOptionsRequest  $generatePlacementOptionsRequest  The `generatePlacementOptions` request.
     */
    public function generatePlacementOptions(
        string $inboundPlanId,
        GeneratePlacementOptionsRequest $generatePlacementOptionsRequest,
    ): Response {
        $request = new GeneratePlacementOptions($inboundPlanId, $generatePlacementOptionsRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  string  $placementOptionId  The identifier of a placement option. A placement option represents the shipment splits and destinations of SKUs.
     */
    public function confirmPlacementOption(string $inboundPlanId, string $placementOptionId): Response
    {
        $request = new ConfirmPlacementOption($inboundPlanId, $placementOptionId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  string  $shipmentId  Identifier of a shipment. A shipment contains the boxes and units being inbounded.
     */
    public function getShipment(string $inboundPlanId, string $shipmentId): Response
    {
        $request = new GetShipment($inboundPlanId, $shipmentId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  string  $shipmentId  Identifier of a shipment. A shipment contains the boxes and units being inbounded.
     * @param  ?int  $pageSize  The number of boxes to return in the response matching the given query.
     * @param  ?string  $paginationToken  A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.
     */
    public function listShipmentBoxes(
        string $inboundPlanId,
        string $shipmentId,
        ?int $pageSize = null,
        ?string $paginationToken = null,
    ): Response {
        $request = new ListShipmentBoxes($inboundPlanId, $shipmentId, $pageSize, $paginationToken);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  string  $shipmentId  Identifier of a shipment. A shipment contains the boxes and units being inbounded.
     * @param  ?int  $pageSize  The number of content update previews to return.
     * @param  ?string  $paginationToken  A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.
     */
    public function listShipmentContentUpdatePreviews(
        string $inboundPlanId,
        string $shipmentId,
        ?int $pageSize = null,
        ?string $paginationToken = null,
    ): Response {
        $request = new ListShipmentContentUpdatePreviews($inboundPlanId, $shipmentId, $pageSize, $paginationToken);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  string  $shipmentId  Identifier of a shipment. A shipment contains the boxes and units being inbounded.
     * @param  GenerateShipmentContentUpdatePreviewsRequest  $generateShipmentContentUpdatePreviewsRequest  The `GenerateShipmentContentUpdatePreviews` request.
     */
    public function generateShipmentContentUpdatePreviews(
        string $inboundPlanId,
        string $shipmentId,
        GenerateShipmentContentUpdatePreviewsRequest $generateShipmentContentUpdatePreviewsRequest,
    ): Response {
        $request = new GenerateShipmentContentUpdatePreviews($inboundPlanId, $shipmentId, $generateShipmentContentUpdatePreviewsRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  string  $shipmentId  Identifier of a shipment. A shipment contains the boxes and units being inbounded.
     * @param  string  $contentUpdatePreviewId  Identifier of a content update preview.
     */
    public function getShipmentContentUpdatePreview(
        string $inboundPlanId,
        string $shipmentId,
        string $contentUpdatePreviewId,
    ): Response {
        $request = new GetShipmentContentUpdatePreview($inboundPlanId, $shipmentId, $contentUpdatePreviewId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  string  $shipmentId  Identifier of a shipment. A shipment contains the boxes and units being inbounded.
     * @param  string  $contentUpdatePreviewId  Identifier of a content update preview.
     */
    public function confirmShipmentContentUpdatePreview(
        string $inboundPlanId,
        string $shipmentId,
        string $contentUpdatePreviewId,
    ): Response {
        $request = new ConfirmShipmentContentUpdatePreview($inboundPlanId, $shipmentId, $contentUpdatePreviewId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  string  $shipmentId  Identifier of a shipment. A shipment contains the boxes and units being inbounded.
     */
    public function getDeliveryChallanDocument(string $inboundPlanId, string $shipmentId): Response
    {
        $request = new GetDeliveryChallanDocument($inboundPlanId, $shipmentId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  string  $shipmentId  The shipment to get delivery window options for.
     * @param  ?int  $pageSize  The number of delivery window options to return in the response matching the given query.
     * @param  ?string  $paginationToken  A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.
     */
    public function listDeliveryWindowOptions(
        string $inboundPlanId,
        string $shipmentId,
        ?int $pageSize = null,
        ?string $paginationToken = null,
    ): Response {
        $request = new ListDeliveryWindowOptions($inboundPlanId, $shipmentId, $pageSize, $paginationToken);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  string  $shipmentId  The shipment to generate delivery window options for.
     */
    public function generateDeliveryWindowOptions(string $inboundPlanId, string $shipmentId): Response
    {
        $request = new GenerateDeliveryWindowOptions($inboundPlanId, $shipmentId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  string  $shipmentId  The shipment to confirm the delivery window option for.
     * @param  string  $deliveryWindowOptionId  The id of the delivery window option to be confirmed.
     */
    public function confirmDeliveryWindowOptions(
        string $inboundPlanId,
        string $shipmentId,
        string $deliveryWindowOptionId,
    ): Response {
        $request = new ConfirmDeliveryWindowOptions($inboundPlanId, $shipmentId, $deliveryWindowOptionId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  string  $shipmentId  Identifier of a shipment. A shipment contains the boxes and units being inbounded.
     * @param  ?int  $pageSize  The number of items to return in the response matching the given query.
     * @param  ?string  $paginationToken  A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.
     */
    public function listShipmentItems(
        string $inboundPlanId,
        string $shipmentId,
        ?int $pageSize = null,
        ?string $paginationToken = null,
    ): Response {
        $request = new ListShipmentItems($inboundPlanId, $shipmentId, $pageSize, $paginationToken);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  string  $shipmentId  Identifier of a shipment. A shipment contains the boxes and units being inbounded.
     * @param  UpdateShipmentNameRequest  $updateShipmentNameRequest  The `updateShipmentName` request.
     */
    public function updateShipmentName(
        string $inboundPlanId,
        string $shipmentId,
        UpdateShipmentNameRequest $updateShipmentNameRequest,
    ): Response {
        $request = new UpdateShipmentName($inboundPlanId, $shipmentId, $updateShipmentNameRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  string  $shipmentId  Identifier of a shipment. A shipment contains the boxes and units being inbounded.
     * @param  ?int  $pageSize  The number of pallets to return in the response matching the given query.
     * @param  ?string  $paginationToken  A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.
     */
    public function listShipmentPallets(
        string $inboundPlanId,
        string $shipmentId,
        ?int $pageSize = null,
        ?string $paginationToken = null,
    ): Response {
        $request = new ListShipmentPallets($inboundPlanId, $shipmentId, $pageSize, $paginationToken);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  string  $shipmentId  Identifier of a shipment. A shipment contains the boxes and units being inbounded.
     * @param  CancelSelfShipAppointmentRequest  $cancelSelfShipAppointmentRequest  The `cancelSelfShipAppointment` request.
     */
    public function cancelSelfShipAppointment(
        string $inboundPlanId,
        string $shipmentId,
        CancelSelfShipAppointmentRequest $cancelSelfShipAppointmentRequest,
    ): Response {
        $request = new CancelSelfShipAppointment($inboundPlanId, $shipmentId, $cancelSelfShipAppointmentRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  string  $shipmentId  Identifier of a shipment. A shipment contains the boxes and units being inbounded.
     * @param  ?int  $pageSize  The number of self ship appointment slots to return in the response matching the given query.
     * @param  ?string  $paginationToken  A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.
     */
    public function getSelfShipAppointmentSlots(
        string $inboundPlanId,
        string $shipmentId,
        ?int $pageSize = null,
        ?string $paginationToken = null,
    ): Response {
        $request = new GetSelfShipAppointmentSlots($inboundPlanId, $shipmentId, $pageSize, $paginationToken);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  string  $shipmentId  Identifier of a shipment. A shipment contains the boxes and units being inbounded.
     * @param  GenerateSelfShipAppointmentSlotsRequest  $generateSelfShipAppointmentSlotsRequest  The `generateSelfShipAppointmentSlots` request.
     */
    public function generateSelfShipAppointmentSlots(
        string $inboundPlanId,
        string $shipmentId,
        GenerateSelfShipAppointmentSlotsRequest $generateSelfShipAppointmentSlotsRequest,
    ): Response {
        $request = new GenerateSelfShipAppointmentSlots($inboundPlanId, $shipmentId, $generateSelfShipAppointmentSlotsRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  string  $shipmentId  Identifier of a shipment. A shipment contains the boxes and units being inbounded.
     * @param  string  $slotId  An identifier to a self-ship appointment slot.
     * @param  ScheduleSelfShipAppointmentRequest  $scheduleSelfShipAppointmentRequest  The `scheduleSelfShipAppointment` request.
     */
    public function scheduleSelfShipAppointment(
        string $inboundPlanId,
        string $shipmentId,
        string $slotId,
        ScheduleSelfShipAppointmentRequest $scheduleSelfShipAppointmentRequest,
    ): Response {
        $request = new ScheduleSelfShipAppointment($inboundPlanId, $shipmentId, $slotId, $scheduleSelfShipAppointmentRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  string  $shipmentId  Identifier of a shipment. A shipment contains the boxes and units being inbounded.
     * @param  UpdateShipmentSourceAddressRequest  $updateShipmentSourceAddressRequest  The `UpdateShipmentSourceAddress` request.
     */
    public function updateShipmentSourceAddress(
        string $inboundPlanId,
        string $shipmentId,
        UpdateShipmentSourceAddressRequest $updateShipmentSourceAddressRequest,
    ): Response {
        $request = new UpdateShipmentSourceAddress($inboundPlanId, $shipmentId, $updateShipmentSourceAddressRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  string  $shipmentId  Identifier of a shipment. A shipment contains the boxes and units being inbounded.
     * @param  UpdateShipmentTrackingDetailsRequest  $updateShipmentTrackingDetailsRequest  The `updateShipmentTrackingDetails` request.
     */
    public function updateShipmentTrackingDetails(
        string $inboundPlanId,
        string $shipmentId,
        UpdateShipmentTrackingDetailsRequest $updateShipmentTrackingDetailsRequest,
    ): Response {
        $request = new UpdateShipmentTrackingDetails($inboundPlanId, $shipmentId, $updateShipmentTrackingDetailsRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  ?int  $pageSize  The number of transportation options to return in the response matching the given query.
     * @param  ?string  $paginationToken  A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.
     * @param  ?string  $placementOptionId  The placement option to get transportation options for. Either `placementOptionId` or `shipmentId` must be specified.
     * @param  ?string  $shipmentId  The shipment to get transportation options for. Either `placementOptionId` or `shipmentId` must be specified.
     */
    public function listTransportationOptions(
        string $inboundPlanId,
        ?int $pageSize = null,
        ?string $paginationToken = null,
        ?string $placementOptionId = null,
        ?string $shipmentId = null,
    ): Response {
        $request = new ListTransportationOptions($inboundPlanId, $pageSize, $paginationToken, $placementOptionId, $shipmentId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  GenerateTransportationOptionsRequest  $generateTransportationOptionsRequest  The `generateTransportationOptions` request.
     */
    public function generateTransportationOptions(
        string $inboundPlanId,
        GenerateTransportationOptionsRequest $generateTransportationOptionsRequest,
    ): Response {
        $request = new GenerateTransportationOptions($inboundPlanId, $generateTransportationOptionsRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $inboundPlanId  Identifier of an inbound plan.
     * @param  ConfirmTransportationOptionsRequest  $confirmTransportationOptionsRequest  The `confirmTransportationOptions` request.
     */
    public function confirmTransportationOptions(
        string $inboundPlanId,
        ConfirmTransportationOptionsRequest $confirmTransportationOptionsRequest,
    ): Response {
        $request = new ConfirmTransportationOptions($inboundPlanId, $confirmTransportationOptionsRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  array  $mskus  A list of merchant SKUs, a merchant-supplied identifier of a specific SKU.
     * @param  string  $marketplaceId  The Marketplace ID. For a list of possible values, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     */
    public function listItemComplianceDetails(array $mskus, string $marketplaceId): Response
    {
        $request = new ListItemComplianceDetails($mskus, $marketplaceId);

        return $this->connector->send($request);
    }

    /**
     * @param  UpdateItemComplianceDetailsRequest  $updateItemComplianceDetailsRequest  The `updateItemComplianceDetails` request.
     * @param  string  $marketplaceId  The Marketplace ID. For a list of possible values, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     */
    public function updateItemComplianceDetails(
        UpdateItemComplianceDetailsRequest $updateItemComplianceDetailsRequest,
        string $marketplaceId,
    ): Response {
        $request = new UpdateItemComplianceDetails($updateItemComplianceDetailsRequest, $marketplaceId);

        return $this->connector->send($request);
    }

    /**
     * @param  CreateMarketplaceItemLabelsRequest  $createMarketplaceItemLabelsRequest  The `createMarketplaceItemLabels` request.
     */
    public function createMarketplaceItemLabels(
        CreateMarketplaceItemLabelsRequest $createMarketplaceItemLabelsRequest,
    ): Response {
        $request = new CreateMarketplaceItemLabels($createMarketplaceItemLabelsRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $marketplaceId  The marketplace ID. For a list of possible values, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     * @param  array  $mskus  A list of merchant SKUs, a merchant-supplied identifier of a specific SKU.
     */
    public function listPrepDetails(string $marketplaceId, array $mskus): Response
    {
        $request = new ListPrepDetails($marketplaceId, $mskus);

        return $this->connector->send($request);
    }

    /**
     * @param  SetPrepDetailsRequest  $setPrepDetailsRequest  The `setPrepDetails` request.
     */
    public function setPrepDetails(SetPrepDetailsRequest $setPrepDetailsRequest): Response
    {
        $request = new SetPrepDetails($setPrepDetailsRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $operationId  Identifier of an asynchronous operation.
     */
    public function getInboundOperationStatus(string $operationId): Response
    {
        $request = new GetInboundOperationStatus($operationId);

        return $this->connector->send($request);
    }
}
