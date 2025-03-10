<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\VehiclesV20241101\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\VehiclesV20241101\Responses\ErrorList;
use SellingPartnerApi\Seller\VehiclesV20241101\Responses\VehiclesResponse;

/**
 * getVehicles
 */
class GetVehicles extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $marketplaceId  An identifier for the marketplace in which the resource operates.
     * @param  string  $vehicleType  An identifier for vehicle type.
     * @param  ?string  $pageToken  A token to fetch a certain page when there are multiple pages worth of results.
     * @param  ?string  $updatedAfter  Date in ISO 8601 format, if provided only vehicles which are modified/added to Amazon's catalog after this date will be returned.
     */
    public function __construct(
        protected string $marketplaceId,
        protected string $vehicleType,
        protected ?string $pageToken = null,
        protected ?string $updatedAfter = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/catalog/2024-11-01/automotive/vehicles';
    }

    public function createDtoFromResponse(Response $response): VehiclesResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => VehiclesResponse::class,
            400, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json());
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'marketplaceId' => $this->marketplaceId,
            'vehicleType' => $this->vehicleType,
            'pageToken' => $this->pageToken,
            'updatedAfter' => $this->updatedAfter,
        ]);
    }
}
