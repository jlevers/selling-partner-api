<?php

namespace SellingPartnerApi\Seller\VehiclesV20241101;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\VehiclesV20241101\Requests\GetVehicles;

class Api extends BaseResource
{
    /**
     * @param  string  $marketplaceId  An identifier for the marketplace in which the resource operates.
     * @param  string  $vehicleType  An identifier for vehicle type.
     * @param  ?string  $pageToken  A token to fetch a certain page when there are multiple pages worth of results.
     * @param  ?string  $updatedAfter  Date in ISO 8601 format, if provided only vehicles which are modified/added to Amazon's catalog after this date will be returned.
     */
    public function getVehicles(
        string $marketplaceId,
        string $vehicleType,
        ?string $pageToken = null,
        ?string $updatedAfter = null,
    ): Response {
        $request = new GetVehicles($marketplaceId, $vehicleType, $pageToken, $updatedAfter);

        return $this->connector->send($request);
    }
}
