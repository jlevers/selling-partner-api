<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use SellingPartnerApi\Request;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Responses\GetShippingLabelListResponse;

/**
 * getShippingLabels
 */
class GetShippingLabels extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  \DateTimeInterface  $createdAfter  Shipping labels that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format.
     * @param  \DateTimeInterface  $createdBefore  Shipping labels that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format.
     * @param  ?string  $shipFromPartyId  The vendor warehouseId for order fulfillment. If not specified, the result will contain orders for all warehouses.
     * @param  ?int  $limit  The limit to the number of records returned.
     * @param  ?string  $sortOrder  Sort ASC or DESC by order creation date.
     * @param  ?string  $nextToken  Used for pagination when there are more ship labels than the specified result size limit. The token value is returned in the previous API call.
     */
    public function __construct(
        protected \DateTimeInterface $createdAfter,
        protected \DateTimeInterface $createdBefore,
        protected ?string $shipFromPartyId = null,
        protected ?int $limit = null,
        protected ?string $sortOrder = null,
        protected ?string $nextToken = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/vendor/directFulfillment/shipping/v1/shippingLabels';
    }

    public function createDtoFromResponse(Response $response): GetShippingLabelListResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 403, 404, 415, 429, 500, 503 => GetShippingLabelListResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json());
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'createdAfter' => $this->createdAfter?->format('Y-m-d\TH:i:s\Z'),
            'createdBefore' => $this->createdBefore?->format('Y-m-d\TH:i:s\Z'),
            'shipFromPartyId' => $this->shipFromPartyId,
            'limit' => $this->limit,
            'sortOrder' => $this->sortOrder,
            'nextToken' => $this->nextToken,
        ]);
    }
}
