<?php

namespace SellingPartnerApi\Seller\SupplySourcesV20200701;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\SupplySourcesV20200701\Dto\CreateSupplySourceRequest;
use SellingPartnerApi\Seller\SupplySourcesV20200701\Dto\UpdateSupplySourceRequest;
use SellingPartnerApi\Seller\SupplySourcesV20200701\Dto\UpdateSupplySourceStatusRequest;
use SellingPartnerApi\Seller\SupplySourcesV20200701\Requests\ArchiveSupplySource;
use SellingPartnerApi\Seller\SupplySourcesV20200701\Requests\CreateSupplySource;
use SellingPartnerApi\Seller\SupplySourcesV20200701\Requests\GetSupplySource;
use SellingPartnerApi\Seller\SupplySourcesV20200701\Requests\GetSupplySources;
use SellingPartnerApi\Seller\SupplySourcesV20200701\Requests\UpdateSupplySource;
use SellingPartnerApi\Seller\SupplySourcesV20200701\Requests\UpdateSupplySourceStatus;

class Api extends BaseResource
{
    /**
     * @param  ?string  $nextPageToken The pagination token to retrieve a specific page of results.
     * @param  ?float  $pageSize The number of supply sources to return per paginated request.
     */
    public function getSupplySources(?string $nextPageToken = null, ?float $pageSize = null): Response
    {
        return $this->connector->send(new GetSupplySources($nextPageToken, $pageSize));
    }

    /**
     * @param  CreateSupplySourceRequest  $createSupplySourceRequest A request to create a supply source.
     */
    public function createSupplySource(CreateSupplySourceRequest $createSupplySourceRequest): Response
    {
        return $this->connector->send(new CreateSupplySource($createSupplySourceRequest));
    }

    /**
     * @param  string  $supplySourceId The unique identifier of a supply source.
     */
    public function getSupplySource(string $supplySourceId): Response
    {
        return $this->connector->send(new GetSupplySource($supplySourceId));
    }

    /**
     * @param  string  $supplySourceId The unique identitier of a supply source.
     * @param  UpdateSupplySourceRequest  $updateSupplySourceRequest A request to update the configuration and capabilities of a supply source.
     */
    public function updateSupplySource(
        string $supplySourceId,
        UpdateSupplySourceRequest $updateSupplySourceRequest,
    ): Response {
        return $this->connector->send(new UpdateSupplySource($supplySourceId, $updateSupplySourceRequest));
    }

    /**
     * @param  string  $supplySourceId The unique identifier of a supply source.
     */
    public function archiveSupplySource(string $supplySourceId): Response
    {
        return $this->connector->send(new ArchiveSupplySource($supplySourceId));
    }

    /**
     * @param  string  $supplySourceId The unique identifier of a supply source.
     * @param  UpdateSupplySourceStatusRequest  $updateSupplySourceStatusRequest A request to update the status of a supply source.
     */
    public function updateSupplySourceStatus(
        string $supplySourceId,
        UpdateSupplySourceStatusRequest $updateSupplySourceStatusRequest,
    ): Response {
        return $this->connector->send(new UpdateSupplySourceStatus($supplySourceId, $updateSupplySourceStatusRequest));
    }
}
