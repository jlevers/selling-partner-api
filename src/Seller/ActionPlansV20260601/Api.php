<?php

namespace SellingPartnerApi\Seller\ActionPlansV20260601;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\ActionPlansV20260601\Dto\CreateActionPlanRequest;
use SellingPartnerApi\Seller\ActionPlansV20260601\Requests\CreateActionPlan;
use SellingPartnerApi\Seller\ActionPlansV20260601\Requests\GetActionPlan;
use SellingPartnerApi\Seller\ActionPlansV20260601\Requests\ListActionPlans;

class Api extends BaseResource
{
    /**
     * @param  string  $actionPlanId  The unique identifier of the action plan (UUID).
     * @param  ?string  $locale  The locale for localized content, as an ISO 639 language code and ISO 3166 country code separated by a hyphen. Defaults to `en-US`.
     * @param  ?array  $includedData  Additional data to include in the response. Include `steps` to include the plan's steps with their resolved input and output values.
     */
    public function getActionPlan(string $actionPlanId, ?string $locale = null, ?array $includedData = null): Response
    {
        $request = new GetActionPlan($actionPlanId, $locale, $includedData);

        return $this->connector->send($request);
    }

    /**
     * @param  ?array  $statuses  Filters by plan status.
     * @param  ?array  $planTemplateIds  Filters by plan template IDs. Multiple values allowed.
     * @param  ?array  $actionItemIds  Filters by associated action item IDs. Multiple values allowed.
     * @param  ?\DateTimeInterface  $createdAfter  Plans created at or after this timestamp. Timestamp is in ISO 8601 format.
     * @param  ?\DateTimeInterface  $createdBefore  Plans created at or before this timestamp. Timestamp is in ISO 8601 format.
     * @param  ?int  $pageSize  Maximum number of results per page.
     * @param  ?string  $pageToken  A token to retrieve a specific page of results. Pass the `nextToken` value from a previous response.
     *
     * **Note:** The `previousToken` value is not yet supported.
     * @param  ?string  $locale  The locale for localized content, as an ISO 639 language code and ISO 3166 country code separated by a hyphen. Defaults to `en-US`.
     * @param  ?array  $includedData  Additional data to return in the response. Specify `steps` to return each plan's steps with their resolved input and output values.
     */
    public function listActionPlans(
        ?array $statuses = null,
        ?array $planTemplateIds = null,
        ?array $actionItemIds = null,
        ?\DateTimeInterface $createdAfter = null,
        ?\DateTimeInterface $createdBefore = null,
        ?int $pageSize = null,
        ?string $pageToken = null,
        ?string $locale = null,
        ?array $includedData = null,
    ): Response {
        $request = new ListActionPlans($statuses, $planTemplateIds, $actionItemIds, $createdAfter, $createdBefore, $pageSize, $pageToken, $locale, $includedData);

        return $this->connector->send($request);
    }

    /**
     * @param  CreateActionPlanRequest  $createActionPlanRequest  Request body for creating an action plan.
     * @param  ?string  $mode  The mode of operation. Set `PREVIEW` to return the plan without creating or executing it. Omit `mode` to create the plan and submit it for execution.
     * @param  ?string  $locale  The locale for localized content, as an ISO 639 language code and ISO 3166 country code separated by a hyphen. Defaults to `en-US`.
     */
    public function createActionPlan(
        CreateActionPlanRequest $createActionPlanRequest,
        ?string $mode = null,
        ?string $locale = null,
    ): Response {
        $request = new CreateActionPlan($createActionPlanRequest, $mode, $locale);

        return $this->connector->send($request);
    }
}
