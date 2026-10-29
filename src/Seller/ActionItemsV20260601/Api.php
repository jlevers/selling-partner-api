<?php

namespace SellingPartnerApi\Seller\ActionItemsV20260601;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\ActionItemsV20260601\Dto\DismissActionItemRequest;
use SellingPartnerApi\Seller\ActionItemsV20260601\Requests\DismissActionItem;
use SellingPartnerApi\Seller\ActionItemsV20260601\Requests\GetActionItem;
use SellingPartnerApi\Seller\ActionItemsV20260601\Requests\ListActionItems;

class Api extends BaseResource
{
    /**
     * @param  ?array  $statuses  Filter by status (OR match).
     * @param  ?array  $classifications  Filter by classification (OR match).
     * @param  ?array  $typeDefinitionIds  Filter by action item type definition IDs. Multiple values allowed.
     * @param  ?array  $marketplaceIds  Filter by marketplace IDs.
     * @param  ?\DateTimeInterface  $updatedAfter  Retrieve items last updated at or after this time. When used with `updatedBefore`, this value must be earlier than `updatedBefore`.
     * @param  ?\DateTimeInterface  $updatedBefore  Retrieve items last updated at or before this time. When used with `updatedAfter`, this value must be later than `updatedAfter`.
     * @param  ?array  $includedData  A list of optional datasets to include in the response. When omitted, only core action item fields are returned.
     * @param  ?string  $sortBy  How to sort results. Defaults to recommended.
     * @param  ?string  $sortOrder  The sort order. Defaults to `DESC`.
     * @param  ?int  $pageSize  Number of results per page.
     * @param  ?string  $pageToken  A token to retrieve a specific page of results. Pass the nextToken or previousToken value from a previous response.
     * @param  ?string  $locale  The BCP 47 locale for localized content. Defaults to `en-US`.
     */
    public function listActionItems(
        ?array $statuses = null,
        ?array $classifications = null,
        ?array $typeDefinitionIds = null,
        ?array $marketplaceIds = null,
        ?\DateTimeInterface $updatedAfter = null,
        ?\DateTimeInterface $updatedBefore = null,
        ?array $includedData = null,
        ?string $sortBy = null,
        ?string $sortOrder = null,
        ?int $pageSize = null,
        ?string $pageToken = null,
        ?string $locale = null,
    ): Response {
        $request = new ListActionItems($statuses, $classifications, $typeDefinitionIds, $marketplaceIds, $updatedAfter, $updatedBefore, $includedData, $sortBy, $sortOrder, $pageSize, $pageToken, $locale);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $actionItemId  The unique identifier of the action item.
     * @param  ?string  $locale  The BCP 47 locale for localized content. Defaults to `en-US`.
     * @param  ?array  $includedData  A list of optional datasets to include in the response. When omitted, only core action item fields are returned.
     */
    public function getActionItem(string $actionItemId, ?string $locale = null, ?array $includedData = null): Response
    {
        $request = new GetActionItem($actionItemId, $locale, $includedData);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $actionItemId  The unique identifier of the action item.
     * @param  DismissActionItemRequest  $dismissActionItemRequest  Request body for dismissing an action item.
     */
    public function dismissActionItem(string $actionItemId, DismissActionItemRequest $dismissActionItemRequest): Response
    {
        $request = new DismissActionItem($actionItemId, $dismissActionItemRequest);

        return $this->connector->send($request);
    }
}
