<?php

namespace SellingPartnerApi\Seller\EasyShipV20220323;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\EasyShipV20220323\Dto\CreateScheduledPackageRequest;
use SellingPartnerApi\Seller\EasyShipV20220323\Dto\CreateScheduledPackagesRequest;
use SellingPartnerApi\Seller\EasyShipV20220323\Dto\ListHandoverSlotsRequest;
use SellingPartnerApi\Seller\EasyShipV20220323\Dto\UpdateScheduledPackagesRequest;
use SellingPartnerApi\Seller\EasyShipV20220323\Requests\CreateScheduledPackage;
use SellingPartnerApi\Seller\EasyShipV20220323\Requests\CreateScheduledPackageBulk;
use SellingPartnerApi\Seller\EasyShipV20220323\Requests\GetScheduledPackage;
use SellingPartnerApi\Seller\EasyShipV20220323\Requests\ListHandoverSlots;
use SellingPartnerApi\Seller\EasyShipV20220323\Requests\UpdateScheduledPackages;

class Api extends BaseResource
{
    /**
     * @param  ListHandoverSlotsRequest  $listHandoverSlotsRequest The request schema for the `listHandoverSlots` operation.
     */
    public function listHandoverSlots(ListHandoverSlotsRequest $listHandoverSlotsRequest): Response
    {
        return $this->connector->send(new ListHandoverSlots($listHandoverSlotsRequest));
    }

    /**
     * @param  string  $amazonOrderId An Amazon-defined order identifier. Identifies the order that the seller wants to deliver using Amazon Easy Ship.
     * @param  string  $marketplaceId An identifier for the marketplace in which the seller is selling.
     */
    public function getScheduledPackage(string $amazonOrderId, string $marketplaceId): Response
    {
        return $this->connector->send(new GetScheduledPackage($amazonOrderId, $marketplaceId));
    }

    /**
     * @param  CreateScheduledPackageRequest  $createScheduledPackageRequest The request schema for the `createScheduledPackage` operation.
     */
    public function createScheduledPackage(CreateScheduledPackageRequest $createScheduledPackageRequest): Response
    {
        return $this->connector->send(new CreateScheduledPackage($createScheduledPackageRequest));
    }

    /**
     * @param  UpdateScheduledPackagesRequest  $updateScheduledPackagesRequest The request schema for the `updateScheduledPackages` operation.
     */
    public function updateScheduledPackages(UpdateScheduledPackagesRequest $updateScheduledPackagesRequest): Response
    {
        return $this->connector->send(new UpdateScheduledPackages($updateScheduledPackagesRequest));
    }

    /**
     * @param  CreateScheduledPackagesRequest  $createScheduledPackagesRequest The request body for the POST /easyShip/2022-03-23/packages/bulk API.
     */
    public function createScheduledPackageBulk(CreateScheduledPackagesRequest $createScheduledPackagesRequest): Response
    {
        return $this->connector->send(new CreateScheduledPackageBulk($createScheduledPackagesRequest));
    }
}
