<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\APlusContentV20201101\Responses\ErrorList;
use SellingPartnerApi\Seller\APlusContentV20201101\Responses\GetContentDocumentResponse;

/**
 * getContentDocument
 */
class GetContentDocument extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $contentReferenceKey  The unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ Content identifier.
     * @param  string  $marketplaceId  The identifier for the marketplace where the A+ Content is published.
     * @param  array  $includedDataSet  The set of A+ Content data types to include in the response.
     */
    public function __construct(
        protected string $contentReferenceKey,
        protected string $marketplaceId,
        protected array $includedDataSet,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['marketplaceId' => $this->marketplaceId, 'includedDataSet' => $this->includedDataSet]);
    }

    public function resolveEndpoint(): string
    {
        return "/aplus/2020-11-01/contentDocuments/{$this->contentReferenceKey}";
    }

    public function createDtoFromResponse(Response $response): GetContentDocumentResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => GetContentDocumentResponse::class,
            400, 401, 403, 404, 410, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
