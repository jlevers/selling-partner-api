<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\APlusContentV20201101\Dto\PostContentDocumentAsinRelationsRequest;
use SellingPartnerApi\Seller\APlusContentV20201101\Responses\ErrorList;
use SellingPartnerApi\Seller\APlusContentV20201101\Responses\PostContentDocumentAsinRelationsResponse;

/**
 * postContentDocumentAsinRelations
 */
class PostContentDocumentAsinRelations extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $contentReferenceKey  The unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ content identifier.
     * @param  string  $marketplaceId  The identifier for the marketplace where the A+ Content is published.
     */
    public function __construct(
        protected string $contentReferenceKey,
        public PostContentDocumentAsinRelationsRequest $postContentDocumentAsinRelationsRequest,
        protected string $marketplaceId,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['marketplaceId' => $this->marketplaceId]);
    }

    public function resolveEndpoint(): string
    {
        return "/aplus/2020-11-01/contentDocuments/{$this->contentReferenceKey}/asins";
    }

    public function createDtoFromResponse(Response $response): PostContentDocumentAsinRelationsResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => PostContentDocumentAsinRelationsResponse::class,
            400, 401, 403, 404, 410, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->postContentDocumentAsinRelationsRequest->toArray();
    }
}
