<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Responses\ErrorList;
use SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Responses\ShipmentListing;

/**
 * listInboundShipments
 */
class ListInboundShipments extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  ?string  $sortBy  Field to sort results by. By default, the response will be sorted by UPDATED_AT.
     * @param  ?string  $sortOrder  Sort the response in ASCENDING or DESCENDING order. By default, the response will be sorted in DESCENDING order.
     * @param  ?string  $shipmentStatus  Filter by inbound shipment status.
     * @param  ?\DateTimeInterface  $updatedAfter  List the inbound shipments that were updated after a certain time (inclusive). The date must be in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> format.
     * @param  ?\DateTimeInterface  $updatedBefore  List the inbound shipments that were updated before a certain time (inclusive). The date must be in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> format.
     * @param  ?int  $maxResults  Maximum number of results to return.
     * @param  ?string  $nextToken  Token to retrieve the next set of paginated results.
     */
    public function __construct(
        protected ?string $sortBy = null,
        protected ?string $sortOrder = null,
        protected ?string $shipmentStatus = null,
        protected ?\DateTimeInterface $updatedAfter = null,
        protected ?\DateTimeInterface $updatedBefore = null,
        protected ?int $maxResults = null,
        protected ?string $nextToken = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/awd/2024-05-09/inboundShipments';
    }

    public function createDtoFromResponse(Response $response): ShipmentListing|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ShipmentListing::class,
            400, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json());
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'sortBy' => $this->sortBy,
            'sortOrder' => $this->sortOrder,
            'shipmentStatus' => $this->shipmentStatus,
            'updatedAfter' => $this->updatedAfter?->format('Y-m-d\TH:i:s\Z'),
            'updatedBefore' => $this->updatedBefore?->format('Y-m-d\TH:i:s\Z'),
            'maxResults' => $this->maxResults,
            'nextToken' => $this->nextToken,
        ]);
    }
}
