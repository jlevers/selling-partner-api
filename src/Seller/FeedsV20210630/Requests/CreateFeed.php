<?php

namespace SellingPartnerApi\Seller\FeedsV20210630\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\FeedsV20210630\Dto\CreateFeedSpecification;
use SellingPartnerApi\Seller\FeedsV20210630\Responses\CreateFeedResponse;
use SellingPartnerApi\Seller\FeedsV20210630\Responses\ErrorList;

/**
 * createFeed
 */
class CreateFeed extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  CreateFeedSpecification  $createFeedSpecification  Information required to create the feed.
     */
    public function __construct(
        public CreateFeedSpecification $createFeedSpecification,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/feeds/2021-06-30/feeds';
    }

    public function createDtoFromResponse(Response $response): CreateFeedResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            202 => CreateFeedResponse::class,
            400, 401, 403, 404, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->createFeedSpecification->toArray();
    }
}
