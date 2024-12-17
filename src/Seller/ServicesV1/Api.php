<?php

namespace SellingPartnerApi\Seller\ServicesV1;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\ServicesV1\Dto\AddAppointmentRequest;
use SellingPartnerApi\Seller\ServicesV1\Dto\AssignAppointmentResourcesRequest;
use SellingPartnerApi\Seller\ServicesV1\Dto\CreateReservationRequest;
use SellingPartnerApi\Seller\ServicesV1\Dto\FixedSlotCapacityQuery;
use SellingPartnerApi\Seller\ServicesV1\Dto\RangeSlotCapacityQuery;
use SellingPartnerApi\Seller\ServicesV1\Dto\RescheduleAppointmentRequest;
use SellingPartnerApi\Seller\ServicesV1\Dto\ServiceUploadDocument;
use SellingPartnerApi\Seller\ServicesV1\Dto\SetAppointmentFulfillmentDataRequest;
use SellingPartnerApi\Seller\ServicesV1\Dto\UpdateReservationRequest;
use SellingPartnerApi\Seller\ServicesV1\Dto\UpdateScheduleRequest;
use SellingPartnerApi\Seller\ServicesV1\Requests\AddAppointmentForServiceJobByServiceJobId;
use SellingPartnerApi\Seller\ServicesV1\Requests\AssignAppointmentResources;
use SellingPartnerApi\Seller\ServicesV1\Requests\CancelReservation;
use SellingPartnerApi\Seller\ServicesV1\Requests\CancelServiceJobByServiceJobId;
use SellingPartnerApi\Seller\ServicesV1\Requests\CompleteServiceJobByServiceJobId;
use SellingPartnerApi\Seller\ServicesV1\Requests\CreateReservation;
use SellingPartnerApi\Seller\ServicesV1\Requests\CreateServiceDocumentUploadDestination;
use SellingPartnerApi\Seller\ServicesV1\Requests\GetAppointmentSlots;
use SellingPartnerApi\Seller\ServicesV1\Requests\GetAppointmmentSlotsByJobId;
use SellingPartnerApi\Seller\ServicesV1\Requests\GetFixedSlotCapacity;
use SellingPartnerApi\Seller\ServicesV1\Requests\GetRangeSlotCapacity;
use SellingPartnerApi\Seller\ServicesV1\Requests\GetServiceJobByServiceJobId;
use SellingPartnerApi\Seller\ServicesV1\Requests\GetServiceJobs;
use SellingPartnerApi\Seller\ServicesV1\Requests\RescheduleAppointmentForServiceJobByServiceJobId;
use SellingPartnerApi\Seller\ServicesV1\Requests\SetAppointmentFulfillmentData;
use SellingPartnerApi\Seller\ServicesV1\Requests\UpdateReservation;
use SellingPartnerApi\Seller\ServicesV1\Requests\UpdateSchedule;

class Api extends BaseResource
{
    /**
     * @param  string  $serviceJobId  A service job identifier.
     */
    public function getServiceJobByServiceJobId(string $serviceJobId): Response
    {
        $request = new GetServiceJobByServiceJobId($serviceJobId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $serviceJobId  An Amazon defined service job identifier.
     * @param  string  $cancellationReasonCode  A cancel reason code that specifies the reason for cancelling a service job.
     */
    public function cancelServiceJobByServiceJobId(string $serviceJobId, string $cancellationReasonCode): Response
    {
        $request = new CancelServiceJobByServiceJobId($serviceJobId, $cancellationReasonCode);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $serviceJobId  An Amazon defined service job identifier.
     */
    public function completeServiceJobByServiceJobId(string $serviceJobId): Response
    {
        $request = new CompleteServiceJobByServiceJobId($serviceJobId);

        return $this->connector->send($request);
    }

    /**
     * @param  array  $marketplaceIds  Used to select jobs that were placed in the specified marketplaces.
     * @param  ?array  $serviceOrderIds  List of service order ids for the query you want to perform.Max values supported 20.
     * @param  ?array  $serviceJobStatus  A list of one or more job status by which to filter the list of jobs.
     * @param  ?string  $pageToken  String returned in the response of your previous request.
     * @param  ?int  $pageSize  A non-negative integer that indicates the maximum number of jobs to return in the list, Value must be 1 - 20. Default 20.
     * @param  ?string  $sortField  Sort fields on which you want to sort the output.
     * @param  ?string  $sortOrder  Sort order for the query you want to perform.
     * @param  ?string  $createdAfter  A date used for selecting jobs created at or after a specified time. Must be in ISO 8601 format. Required if `LastUpdatedAfter` is not specified. Specifying both `CreatedAfter` and `LastUpdatedAfter` returns an error.
     * @param  ?string  $createdBefore  A date used for selecting jobs created at or before a specified time. Must be in ISO 8601 format.
     * @param  ?string  $lastUpdatedAfter  A date used for selecting jobs updated at or after a specified time. Must be in ISO 8601 format. Required if `createdAfter` is not specified. Specifying both `CreatedAfter` and `LastUpdatedAfter` returns an error.
     * @param  ?string  $lastUpdatedBefore  A date used for selecting jobs updated at or before a specified time. Must be in ISO 8601 format.
     * @param  ?string  $scheduleStartDate  A date used for filtering jobs schedules at or after a specified time. Must be in ISO 8601 format. Schedule end date should not be earlier than schedule start date.
     * @param  ?string  $scheduleEndDate  A date used for filtering jobs schedules at or before a specified time. Must be in ISO 8601 format. Schedule end date should not be earlier than schedule start date.
     * @param  ?array  $asins  List of Amazon Standard Identification Numbers (ASIN) of the items. Max values supported is 20.
     * @param  ?array  $requiredSkills  A defined set of related knowledge, skills, experience, tools, materials, and work processes common to service delivery for a set of products and/or service scenarios. Max values supported is 20.
     * @param  ?array  $storeIds  List of Amazon-defined identifiers for the region scope. Max values supported is 50.
     */
    public function getServiceJobs(
        array $marketplaceIds,
        ?array $serviceOrderIds = null,
        ?array $serviceJobStatus = null,
        ?string $pageToken = null,
        ?int $pageSize = null,
        ?string $sortField = null,
        ?string $sortOrder = null,
        ?string $createdAfter = null,
        ?string $createdBefore = null,
        ?string $lastUpdatedAfter = null,
        ?string $lastUpdatedBefore = null,
        ?string $scheduleStartDate = null,
        ?string $scheduleEndDate = null,
        ?array $asins = null,
        ?array $requiredSkills = null,
        ?array $storeIds = null,
    ): Response {
        $request = new GetServiceJobs($marketplaceIds, $serviceOrderIds, $serviceJobStatus, $pageToken, $pageSize, $sortField, $sortOrder, $createdAfter, $createdBefore, $lastUpdatedAfter, $lastUpdatedBefore, $scheduleStartDate, $scheduleEndDate, $asins, $requiredSkills, $storeIds);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $serviceJobId  An Amazon defined service job identifier.
     * @param  AddAppointmentRequest  $addAppointmentRequest  Input for add appointment operation.
     */
    public function addAppointmentForServiceJobByServiceJobId(
        string $serviceJobId,
        AddAppointmentRequest $addAppointmentRequest,
    ): Response {
        $request = new AddAppointmentForServiceJobByServiceJobId($serviceJobId, $addAppointmentRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $serviceJobId  An Amazon defined service job identifier.
     * @param  string  $appointmentId  An existing appointment identifier for the Service Job.
     * @param  RescheduleAppointmentRequest  $rescheduleAppointmentRequest  Input for rescheduled appointment operation.
     */
    public function rescheduleAppointmentForServiceJobByServiceJobId(
        string $serviceJobId,
        string $appointmentId,
        RescheduleAppointmentRequest $rescheduleAppointmentRequest,
    ): Response {
        $request = new RescheduleAppointmentForServiceJobByServiceJobId($serviceJobId, $appointmentId, $rescheduleAppointmentRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $serviceJobId  An Amazon-defined service job identifier. Get this value by calling the `getServiceJobs` operation of the Services API.
     * @param  string  $appointmentId  An Amazon-defined identifier of active service job appointment.
     * @param  AssignAppointmentResourcesRequest  $assignAppointmentResourcesRequest  Request schema for the `assignAppointmentResources` operation.
     */
    public function assignAppointmentResources(
        string $serviceJobId,
        string $appointmentId,
        AssignAppointmentResourcesRequest $assignAppointmentResourcesRequest,
    ): Response {
        $request = new AssignAppointmentResources($serviceJobId, $appointmentId, $assignAppointmentResourcesRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $serviceJobId  An Amazon-defined service job identifier. Get this value by calling the `getServiceJobs` operation of the Services API.
     * @param  string  $appointmentId  An Amazon-defined identifier of active service job appointment.
     * @param  SetAppointmentFulfillmentDataRequest  $setAppointmentFulfillmentDataRequest  Input for set appointment fulfillment data operation.
     */
    public function setAppointmentFulfillmentData(
        string $serviceJobId,
        string $appointmentId,
        SetAppointmentFulfillmentDataRequest $setAppointmentFulfillmentDataRequest,
    ): Response {
        $request = new SetAppointmentFulfillmentData($serviceJobId, $appointmentId, $setAppointmentFulfillmentDataRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $resourceId  Resource Identifier.
     * @param  RangeSlotCapacityQuery  $rangeSlotCapacityQuery  Request schema for the `getRangeSlotCapacity` operation. This schema is used to define the time range and capacity types that are being queried.
     * @param  array  $marketplaceIds  An identifier for the marketplace in which the resource operates.
     * @param  ?string  $nextPageToken  Next page token returned in the response of your previous request.
     */
    public function getRangeSlotCapacity(
        string $resourceId,
        RangeSlotCapacityQuery $rangeSlotCapacityQuery,
        array $marketplaceIds,
        ?string $nextPageToken = null,
    ): Response {
        $request = new GetRangeSlotCapacity($resourceId, $rangeSlotCapacityQuery, $marketplaceIds, $nextPageToken);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $resourceId  Resource Identifier.
     * @param  FixedSlotCapacityQuery  $fixedSlotCapacityQuery  Request schema for the `getFixedSlotCapacity` operation. This schema is used to define the time range, capacity types and slot duration which are being queried.
     * @param  array  $marketplaceIds  An identifier for the marketplace in which the resource operates.
     * @param  ?string  $nextPageToken  Next page token returned in the response of your previous request.
     */
    public function getFixedSlotCapacity(
        string $resourceId,
        FixedSlotCapacityQuery $fixedSlotCapacityQuery,
        array $marketplaceIds,
        ?string $nextPageToken = null,
    ): Response {
        $request = new GetFixedSlotCapacity($resourceId, $fixedSlotCapacityQuery, $marketplaceIds, $nextPageToken);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $resourceId  Resource (store) Identifier
     * @param  UpdateScheduleRequest  $updateScheduleRequest  Request schema for the `updateSchedule` operation.
     * @param  array  $marketplaceIds  An identifier for the marketplace in which the resource operates.
     */
    public function updateSchedule(
        string $resourceId,
        UpdateScheduleRequest $updateScheduleRequest,
        array $marketplaceIds,
    ): Response {
        $request = new UpdateSchedule($resourceId, $updateScheduleRequest, $marketplaceIds);

        return $this->connector->send($request);
    }

    /**
     * @param  CreateReservationRequest  $createReservationRequest  Request schema for the `createReservation` operation.
     * @param  array  $marketplaceIds  An identifier for the marketplace in which the resource operates.
     */
    public function createReservation(
        CreateReservationRequest $createReservationRequest,
        array $marketplaceIds,
    ): Response {
        $request = new CreateReservation($createReservationRequest, $marketplaceIds);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $reservationId  Reservation Identifier
     * @param  UpdateReservationRequest  $updateReservationRequest  Request schema for the `updateReservation` operation.
     * @param  array  $marketplaceIds  An identifier for the marketplace in which the resource operates.
     */
    public function updateReservation(
        string $reservationId,
        UpdateReservationRequest $updateReservationRequest,
        array $marketplaceIds,
    ): Response {
        $request = new UpdateReservation($reservationId, $updateReservationRequest, $marketplaceIds);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $reservationId  Reservation Identifier
     * @param  array  $marketplaceIds  An identifier for the marketplace in which the resource operates.
     */
    public function cancelReservation(string $reservationId, array $marketplaceIds): Response
    {
        $request = new CancelReservation($reservationId, $marketplaceIds);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $serviceJobId  A service job identifier to retrive appointment slots for associated service.
     * @param  array  $marketplaceIds  An identifier for the marketplace in which the resource operates.
     * @param  ?string  $startTime  A time from which the appointment slots will be retrieved. The specified time must be in ISO 8601 format. If `startTime` is provided, `endTime` should also be provided. Default value is as per business configuration.
     * @param  ?string  $endTime  A time up to which the appointment slots will be retrieved. The specified time must be in ISO 8601 format. If `endTime` is provided, `startTime` should also be provided. Default value is as per business configuration. Maximum range of appointment slots can be 90 days.
     */
    public function getAppointmmentSlotsByJobId(
        string $serviceJobId,
        array $marketplaceIds,
        ?string $startTime = null,
        ?string $endTime = null,
    ): Response {
        $request = new GetAppointmmentSlotsByJobId($serviceJobId, $marketplaceIds, $startTime, $endTime);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $asin  ASIN associated with the service.
     * @param  string  $storeId  Store identifier defining the region scope to retrive appointment slots.
     * @param  array  $marketplaceIds  An identifier for the marketplace for which appointment slots are queried
     * @param  ?string  $startTime  A time from which the appointment slots will be retrieved. The specified time must be in ISO 8601 format. If `startTime` is provided, `endTime` should also be provided. Default value is as per business configuration.
     * @param  ?string  $endTime  A time up to which the appointment slots will be retrieved. The specified time must be in ISO 8601 format. If `endTime` is provided, `startTime` should also be provided. Default value is as per business configuration. Maximum range of appointment slots can be 90 days.
     */
    public function getAppointmentSlots(
        string $asin,
        string $storeId,
        array $marketplaceIds,
        ?string $startTime = null,
        ?string $endTime = null,
    ): Response {
        $request = new GetAppointmentSlots($asin, $storeId, $marketplaceIds, $startTime, $endTime);

        return $this->connector->send($request);
    }

    /**
     * @param  ServiceUploadDocument  $serviceUploadDocument  Input for to be uploaded document.
     */
    public function createServiceDocumentUploadDestination(ServiceUploadDocument $serviceUploadDocument): Response
    {
        $request = new CreateServiceDocumentUploadDestination($serviceUploadDocument);

        return $this->connector->send($request);
    }
}
