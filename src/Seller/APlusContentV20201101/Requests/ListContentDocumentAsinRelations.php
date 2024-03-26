<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\APlusContentV20201101\Responses\ErrorList;
use SellingPartnerApi\Seller\APlusContentV20201101\Responses\ListContentDocumentAsinRelationsResponse;

/**
 * listContentDocumentAsinRelations
 */
class ListContentDocumentAsinRelations extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $contentReferenceKey  The unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ Content identifier.
     * @param  string  $marketplaceId  The identifier for the marketplace where the A+ Content is published.
     * @param  ?array  $includedDataSet  The set of A+ Content data types to include in the response. If you do not include this parameter, the operation returns the related ASINs without metadata.
     * @param  ?array  $asinSet  The set of ASINs.
     * @param  ?string  $pageToken  A page token from the nextPageToken response element returned by your previous call to this operation. nextPageToken is returned when the results of a call exceed the page size. To get the next page of results, call the operation and include pageToken as the only parameter. Specifying pageToken with any other parameter will cause the request to fail. When no nextPageToken value is returned there are no more pages to return. A pageToken value is not usable across different operations.
     */
    public function __construct(
        protected string $contentReferenceKey,
        protected string $marketplaceId,
        protected ?array $includedDataSet = null,
        protected ?array $asinSet = null,
        protected ?string $pageToken = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'marketplaceId' => $this->marketplaceId,
            'includedDataSet' => $this->includedDataSet,
            'asinSet' => $this->asinSet,
            'pageToken' => $this->pageToken,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return "/aplus/2020-11-01/contentDocuments/{$this->contentReferenceKey}/asins";
    }

    public function createDtoFromResponse(Response $response): ListContentDocumentAsinRelationsResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ListContentDocumentAsinRelationsResponse::class,
            400, 401, 403, 404, 410, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
