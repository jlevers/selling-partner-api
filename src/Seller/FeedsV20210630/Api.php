<?php

namespace SellingPartnerApi\Seller\FeedsV20210630;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\FeedsV20210630\Dto\CreateFeedDocumentSpecification;
use SellingPartnerApi\Seller\FeedsV20210630\Dto\CreateFeedSpecification;
use SellingPartnerApi\Seller\FeedsV20210630\Requests\CancelFeed;
use SellingPartnerApi\Seller\FeedsV20210630\Requests\CreateFeed;
use SellingPartnerApi\Seller\FeedsV20210630\Requests\CreateFeedDocument;
use SellingPartnerApi\Seller\FeedsV20210630\Requests\GetFeed;
use SellingPartnerApi\Seller\FeedsV20210630\Requests\GetFeedDocument;
use SellingPartnerApi\Seller\FeedsV20210630\Requests\GetFeeds;

class Api extends BaseResource
{
    /**
     * @param  ?array  $feedTypes  A list of feed types used to filter feeds. When feedTypes is provided, the other filter parameters (processingStatuses, marketplaceIds, createdSince, createdUntil) and pageSize may also be provided. Either feedTypes or nextToken is required.
     * @param  ?array  $marketplaceIds  A list of marketplace identifiers used to filter feeds. The feeds returned will match at least one of the marketplaces that you specify.
     * @param  ?int  $pageSize  The maximum number of feeds to return in a single call.
     * @param  ?array  $processingStatuses  A list of processing statuses used to filter feeds.
     * @param  ?\DateTimeInterface  $createdSince  The earliest feed creation date and time for feeds included in the response, in ISO 8601 format. The default is 90 days ago. Feeds are retained for a maximum of 90 days.
     * @param  ?\DateTimeInterface  $createdUntil  The latest feed creation date and time for feeds included in the response, in ISO 8601 format. The default is now.
     * @param  ?string  $nextToken  A string token returned in the response to your previous request. nextToken is returned when the number of results exceeds the specified pageSize value. To get the next page of results, call the getFeeds operation and include this token as the only parameter. Specifying nextToken with any other parameters will cause the request to fail.
     */
    public function getFeeds(
        ?array $feedTypes = null,
        ?array $marketplaceIds = null,
        ?int $pageSize = null,
        ?array $processingStatuses = null,
        ?\DateTimeInterface $createdSince = null,
        ?\DateTimeInterface $createdUntil = null,
        ?string $nextToken = null,
    ): Response {
        $request = new GetFeeds($feedTypes, $marketplaceIds, $pageSize, $processingStatuses, $createdSince, $createdUntil, $nextToken);

        return $this->connector->send($request);
    }

    /**
     * @param  CreateFeedSpecification  $createFeedSpecification  Information required to create the feed.
     */
    public function createFeed(CreateFeedSpecification $createFeedSpecification): Response
    {
        $request = new CreateFeed($createFeedSpecification);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $feedId  The identifier for the feed. This identifier is unique only in combination with a seller ID.
     */
    public function getFeed(string $feedId): Response
    {
        $request = new GetFeed($feedId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $feedId  The identifier for the feed. This identifier is unique only in combination with a seller ID.
     */
    public function cancelFeed(string $feedId): Response
    {
        $request = new CancelFeed($feedId);

        return $this->connector->send($request);
    }

    /**
     * @param  CreateFeedDocumentSpecification  $createFeedDocumentSpecification  Specifies the content type for the createFeedDocument operation.
     */
    public function createFeedDocument(CreateFeedDocumentSpecification $createFeedDocumentSpecification): Response
    {
        $request = new CreateFeedDocument($createFeedDocumentSpecification);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $feedDocumentId  The identifier of the feed document.
     */
    public function getFeedDocument(string $feedDocumentId): Response
    {
        $request = new GetFeedDocument($feedDocumentId);

        return $this->connector->send($request);
    }
}
