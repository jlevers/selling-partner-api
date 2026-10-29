<?php

namespace SellingPartnerApi\Seller\MessagingV20260420;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\MessagingV20260420\Dto\CreateAutomationConfigRequest;
use SellingPartnerApi\Seller\MessagingV20260420\Dto\UpdateAutomationConfigRequest;
use SellingPartnerApi\Seller\MessagingV20260420\Requests\CreateAutomationConfiguration;
use SellingPartnerApi\Seller\MessagingV20260420\Requests\GetAutomationConfiguration;
use SellingPartnerApi\Seller\MessagingV20260420\Requests\ListAutomationConfigurations;
use SellingPartnerApi\Seller\MessagingV20260420\Requests\UpdateAutomationConfiguration;

class Api extends BaseResource
{
    /**
     * @param  array  $marketplaceIds  A comma-delimited list of [Amazon store identifiers](https://developer-docs.amazon/sp-api/docs/marketplace-ids) for the request. Required for store-scoped operations and authorization. Your application must have permission to operate in the specified stores before processing the request body.
     * @param  ?string  $automationType  Filters results by automation type.
     * @param  ?string  $automationSubType  Filters results by automation sub-type.
     * @param  ?string  $includeMarketplaceAutomations  When set to `true`, the response includes the full, store-level automation details for each configuration, including response text, attachment URL, and the trigger conditions that define when the automation activates for that store. When false or omitted, only the top-level configuration metadata (identifier, status, display name, timestamps) is returned.
     * @param  ?int  $pageSize  The number of results to return per page. Minimum: 1. Maximum: 50. Default: 10.
     * @param  ?string  $paginationToken  A token to fetch the next page of results. Use the `nextToken` value returned in the previous response's `pagination` object.
     */
    public function listAutomationConfigurations(
        array $marketplaceIds,
        ?string $automationType = null,
        ?string $automationSubType = null,
        ?string $includeMarketplaceAutomations = null,
        ?int $pageSize = null,
        ?string $paginationToken = null,
    ): Response {
        $request = new ListAutomationConfigurations($marketplaceIds, $automationType, $automationSubType, $includeMarketplaceAutomations, $pageSize, $paginationToken);

        return $this->connector->send($request);
    }

    /**
     * @param  CreateAutomationConfigRequest  $createAutomationConfigRequest  The request body for creating a new automation configuration. A seller can have up to 10 automation configurations, including deactivated configurations.
     * @param  array  $marketplaceIds  A comma-delimited list of [Amazon store identifiers](https://developer-docs.amazon/sp-api/docs/marketplace-ids) for the request. Required for store-scoped operations and authorization. Your application must have permission to operate in the specified stores before processing the request body.
     */
    public function createAutomationConfiguration(
        CreateAutomationConfigRequest $createAutomationConfigRequest,
        array $marketplaceIds,
    ): Response {
        $request = new CreateAutomationConfiguration($createAutomationConfigRequest, $marketplaceIds);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $automationId  The unique identifier of the automation configuration.
     * @param  array  $marketplaceIds  A comma-delimited list of [Amazon store identifiers](https://developer-docs.amazon/sp-api/docs/marketplace-ids) for the request. Required for store-scoped operations and authorization. Your application must have permission to operate in the specified stores before processing the request body.
     */
    public function getAutomationConfiguration(string $automationId, array $marketplaceIds): Response
    {
        $request = new GetAutomationConfiguration($automationId, $marketplaceIds);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $automationId  The unique identifier of the automation configuration to update.
     * @param  UpdateAutomationConfigRequest  $updateAutomationConfigRequest  The request body for updating an existing automation configuration.
     * @param  array  $marketplaceIds  A comma-delimited list of [Amazon store identifiers](https://developer-docs.amazon/sp-api/docs/marketplace-ids) for the request. Required for store-scoped operations and authorization. Your application must have permission to operate in the specified stores before processing the request body.
     */
    public function updateAutomationConfiguration(
        string $automationId,
        UpdateAutomationConfigRequest $updateAutomationConfigRequest,
        array $marketplaceIds,
    ): Response {
        $request = new UpdateAutomationConfiguration($automationId, $updateAutomationConfigRequest, $marketplaceIds);

        return $this->connector->send($request);
    }
}
