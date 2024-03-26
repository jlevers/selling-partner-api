<?php

namespace SellingPartnerApi\Seller\FeedsV20210630\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\FeedsV20210630\Responses\ErrorList;
use SellingPartnerApi\Seller\FeedsV20210630\Responses\GetFeedsResponse;

/**
 * getFeeds
 */
class GetFeeds extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  ?array  $feedTypes  A list of feed types used to filter feeds. When feedTypes is provided, the other filter parameters (processingStatuses, marketplaceIds, createdSince, createdUntil) and pageSize may also be provided. Either feedTypes or nextToken is required.
     * @param  ?array  $marketplaceIds  A list of marketplace identifiers used to filter feeds. The feeds returned will match at least one of the marketplaces that you specify.
     * @param  ?int  $pageSize  The maximum number of feeds to return in a single call.
     * @param  ?array  $processingStatuses  A list of processing statuses used to filter feeds.
     * @param  ?DateTime  $createdSince  The earliest feed creation date and time for feeds included in the response, in ISO 8601 format. The default is 90 days ago. Feeds are retained for a maximum of 90 days.
     * @param  ?DateTime  $createdUntil  The latest feed creation date and time for feeds included in the response, in ISO 8601 format. The default is now.
     * @param  ?string  $nextToken  A string token returned in the response to your previous request. nextToken is returned when the number of results exceeds the specified pageSize value. To get the next page of results, call the getFeeds operation and include this token as the only parameter. Specifying nextToken with any other parameters will cause the request to fail.
     */
    public function __construct(
        protected ?array $feedTypes = null,
        protected ?array $marketplaceIds = null,
        protected ?int $pageSize = null,
        protected ?array $processingStatuses = null,
        protected ?\DateTime $createdSince = null,
        protected ?\DateTime $createdUntil = null,
        protected ?string $nextToken = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'feedTypes' => $this->feedTypes,
            'marketplaceIds' => $this->marketplaceIds,
            'pageSize' => $this->pageSize,
            'processingStatuses' => $this->processingStatuses,
            'createdSince' => $this->createdSince?->format(\DateTime::RFC3339),
            'createdUntil' => $this->createdUntil?->format(\DateTime::RFC3339),
            'nextToken' => $this->nextToken,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return '/feeds/2021-06-30/feeds';
    }

    public function createDtoFromResponse(Response $response): GetFeedsResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => GetFeedsResponse::class,
            400, 401, 403, 404, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
