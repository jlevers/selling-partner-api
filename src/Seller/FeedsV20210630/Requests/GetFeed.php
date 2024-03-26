<?php

namespace SellingPartnerApi\Seller\FeedsV20210630\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\FeedsV20210630\Responses\ErrorList;
use SellingPartnerApi\Seller\FeedsV20210630\Responses\Feed;

/**
 * getFeed
 */
class GetFeed extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $feedId  The identifier for the feed. This identifier is unique only in combination with a seller ID.
     */
    public function __construct(
        protected string $feedId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/feeds/2021-06-30/feeds/{$this->feedId}";
    }

    public function createDtoFromResponse(Response $response): Feed|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => Feed::class,
            400, 401, 403, 404, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
