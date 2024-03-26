<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\APlusContentV20201101\Responses\ErrorList;
use SellingPartnerApi\Seller\APlusContentV20201101\Responses\SearchContentPublishRecordsResponse;

/**
 * searchContentPublishRecords
 */
class SearchContentPublishRecords extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $marketplaceId  The identifier for the marketplace where the A+ Content is published.
     * @param  string  $asin  The Amazon Standard Identification Number (ASIN).
     * @param  ?string  $pageToken  A page token from the nextPageToken response element returned by your previous call to this operation. nextPageToken is returned when the results of a call exceed the page size. To get the next page of results, call the operation and include pageToken as the only parameter. Specifying pageToken with any other parameter will cause the request to fail. When no nextPageToken value is returned there are no more pages to return. A pageToken value is not usable across different operations.
     */
    public function __construct(
        protected string $marketplaceId,
        protected string $asin,
        protected ?string $pageToken = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['marketplaceId' => $this->marketplaceId, 'asin' => $this->asin, 'pageToken' => $this->pageToken]);
    }

    public function resolveEndpoint(): string
    {
        return '/aplus/2020-11-01/contentPublishRecords';
    }

    public function createDtoFromResponse(Response $response): SearchContentPublishRecordsResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => SearchContentPublishRecordsResponse::class,
            400, 401, 403, 404, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
