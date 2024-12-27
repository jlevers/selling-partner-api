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
use SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Responses\InventoryListing;

/**
 * listInventory
 */
class ListInventory extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  ?string  $sku  Filter by seller or merchant SKU for the item.
     * @param  ?string  $sortOrder  Sort the response in `ASCENDING` or `DESCENDING` order.
     * @param  ?string  $details  Set to `SHOW` to return summaries with additional inventory details. Defaults to `HIDE,` which returns only inventory summary totals.
     * @param  ?string  $nextToken  A token that is used to retrieve the next page of results. The response includes `nextToken` when the number of results exceeds the specified `maxResults` value. To get the next page of results, call the operation with this token and include the same arguments as the call that produced the token. To get a complete list, call this operation until `nextToken` is null. Note that this operation can return empty pages.
     * @param  ?int  $maxResults  Maximum number of results to return.
     */
    public function __construct(
        protected ?string $sku = null,
        protected ?string $sortOrder = null,
        protected ?string $details = null,
        protected ?string $nextToken = null,
        protected ?int $maxResults = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/awd/2024-05-09/inventory';
    }

    public function createDtoFromResponse(Response $response): InventoryListing|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => InventoryListing::class,
            400, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json());
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'sku' => $this->sku,
            'sortOrder' => $this->sortOrder,
            'details' => $this->details,
            'nextToken' => $this->nextToken,
            'maxResults' => $this->maxResults,
        ]);
    }
}
