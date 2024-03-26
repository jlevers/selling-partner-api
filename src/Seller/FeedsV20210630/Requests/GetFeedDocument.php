<?php

namespace SellingPartnerApi\Seller\FeedsV20210630\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\FeedsV20210630\Responses\ErrorList;
use SellingPartnerApi\Seller\FeedsV20210630\Responses\FeedDocument;

/**
 * getFeedDocument
 */
class GetFeedDocument extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $feedDocumentId  The identifier of the feed document.
     */
    public function __construct(
        protected string $feedDocumentId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/feeds/2021-06-30/documents/{$this->feedDocumentId}";
    }

    public function createDtoFromResponse(Response $response): FeedDocument|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => FeedDocument::class,
            400, 401, 403, 404, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
