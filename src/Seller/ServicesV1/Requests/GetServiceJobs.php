<?php

namespace SellingPartnerApi\Seller\ServicesV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\ServicesV1\Responses\GetServiceJobsResponse;

/**
 * getServiceJobs
 */
class GetServiceJobs extends Request
{
    protected Method $method = Method::GET;

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
    public function __construct(
        protected array $marketplaceIds,
        protected ?array $serviceOrderIds = null,
        protected ?array $serviceJobStatus = null,
        protected ?string $pageToken = null,
        protected ?int $pageSize = null,
        protected ?string $sortField = null,
        protected ?string $sortOrder = null,
        protected ?string $createdAfter = null,
        protected ?string $createdBefore = null,
        protected ?string $lastUpdatedAfter = null,
        protected ?string $lastUpdatedBefore = null,
        protected ?string $scheduleStartDate = null,
        protected ?string $scheduleEndDate = null,
        protected ?array $asins = null,
        protected ?array $requiredSkills = null,
        protected ?array $storeIds = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'marketplaceIds' => $this->marketplaceIds,
            'serviceOrderIds' => $this->serviceOrderIds,
            'serviceJobStatus' => $this->serviceJobStatus,
            'pageToken' => $this->pageToken,
            'pageSize' => $this->pageSize,
            'sortField' => $this->sortField,
            'sortOrder' => $this->sortOrder,
            'createdAfter' => $this->createdAfter,
            'createdBefore' => $this->createdBefore,
            'lastUpdatedAfter' => $this->lastUpdatedAfter,
            'lastUpdatedBefore' => $this->lastUpdatedBefore,
            'scheduleStartDate' => $this->scheduleStartDate,
            'scheduleEndDate' => $this->scheduleEndDate,
            'asins' => $this->asins,
            'requiredSkills' => $this->requiredSkills,
            'storeIds' => $this->storeIds,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return '/service/v1/serviceJobs';
    }

    public function createDtoFromResponse(Response $response): GetServiceJobsResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 403, 404, 413, 415, 429, 500, 503 => GetServiceJobsResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
