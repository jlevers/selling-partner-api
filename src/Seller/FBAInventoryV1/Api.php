<?php

namespace SellingPartnerApi\Seller\FBAInventoryV1;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\FBAInventoryV1\Dto\AddInventoryRequest;
use SellingPartnerApi\Seller\FBAInventoryV1\Dto\CreateInventoryItemRequest;
use SellingPartnerApi\Seller\FBAInventoryV1\Requests\AddInventory;
use SellingPartnerApi\Seller\FBAInventoryV1\Requests\CreateInventoryItem;
use SellingPartnerApi\Seller\FBAInventoryV1\Requests\DeleteInventoryItem;
use SellingPartnerApi\Seller\FBAInventoryV1\Requests\GetInventorySummaries;

class Api extends BaseResource
{
    /**
     * @param  string  $granularityType  The granularity type for the inventory aggregation level.
     * @param  string  $granularityId  The granularity ID for the inventory aggregation level.
     * @param  array  $marketplaceIds  The marketplace ID for the marketplace for which to return inventory summaries.
     * @param  ?bool  $details  true to return inventory summaries with additional summarized inventory details and quantities. Otherwise, returns inventory summaries only (default value).
     * @param  ?\DateTimeInterface  $startDateTime  A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected.
     * @param  ?array  $sellerSkus  A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs.
     * @param  ?string  $sellerSku  A single seller SKU used for querying the specified seller SKU inventory summaries.
     * @param  ?string  $nextToken  String token returned in the response of your previous request. The string token will expire 30 seconds after being created.
     */
    public function getInventorySummaries(
        string $granularityType,
        string $granularityId,
        array $marketplaceIds,
        ?bool $details = null,
        ?\DateTimeInterface $startDateTime = null,
        ?array $sellerSkus = null,
        ?string $sellerSku = null,
        ?string $nextToken = null,
    ): Response {
        $request = new GetInventorySummaries($granularityType, $granularityId, $marketplaceIds, $details, $startDateTime, $sellerSkus, $sellerSku, $nextToken);

        return $this->connector->send($request);
    }

    /**
     * @param  CreateInventoryItemRequest  $createInventoryItemRequest  An item to be created in the inventory.
     */
    public function createInventoryItem(CreateInventoryItemRequest $createInventoryItemRequest): Response
    {
        $request = new CreateInventoryItem($createInventoryItemRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $sellerSku  A single seller SKU used for querying the specified seller SKU inventory summaries.
     * @param  string  $marketplaceId  The marketplace ID for the marketplace for which the sellerSku is to be deleted.
     */
    public function deleteInventoryItem(string $sellerSku, string $marketplaceId): Response
    {
        $request = new DeleteInventoryItem($sellerSku, $marketplaceId);

        return $this->connector->send($request);
    }

    /**
     * @param  AddInventoryRequest  $addInventoryRequest  The object with the list of Inventory to be added
     * @param  string  $xAmznIdempotencyToken  A unique token/requestId provided with each call to ensure idempotency.
     */
    public function addInventory(AddInventoryRequest $addInventoryRequest, string $xAmznIdempotencyToken): Response
    {
        $request = new AddInventory($addInventoryRequest, $xAmznIdempotencyToken);

        return $this->connector->send($request);
    }
}
