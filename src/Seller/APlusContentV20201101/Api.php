<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\APlusContentV20201101\Dto\PostContentDocumentAsinRelationsRequest;
use SellingPartnerApi\Seller\APlusContentV20201101\Dto\PostContentDocumentRequest;
use SellingPartnerApi\Seller\APlusContentV20201101\Requests\CreateContentDocument;
use SellingPartnerApi\Seller\APlusContentV20201101\Requests\GetContentDocument;
use SellingPartnerApi\Seller\APlusContentV20201101\Requests\ListContentDocumentAsinRelations;
use SellingPartnerApi\Seller\APlusContentV20201101\Requests\PostContentDocumentApprovalSubmission;
use SellingPartnerApi\Seller\APlusContentV20201101\Requests\PostContentDocumentAsinRelations;
use SellingPartnerApi\Seller\APlusContentV20201101\Requests\PostContentDocumentSuspendSubmission;
use SellingPartnerApi\Seller\APlusContentV20201101\Requests\SearchContentDocuments;
use SellingPartnerApi\Seller\APlusContentV20201101\Requests\SearchContentPublishRecords;
use SellingPartnerApi\Seller\APlusContentV20201101\Requests\UpdateContentDocument;
use SellingPartnerApi\Seller\APlusContentV20201101\Requests\ValidateContentDocumentAsinRelations;

class Api extends BaseResource
{
    /**
     * @param  string  $marketplaceId  The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     * @param  ?string  $pageToken  A token that you use to fetch a specific page when there are multiple pages of results.
     */
    public function searchContentDocuments(string $marketplaceId, ?string $pageToken = null): Response
    {
        $request = new SearchContentDocuments($marketplaceId, $pageToken);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $marketplaceId  The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     */
    public function createContentDocument(
        PostContentDocumentRequest $postContentDocumentRequest,
        string $marketplaceId,
    ): Response {
        $request = new CreateContentDocument($postContentDocumentRequest, $marketplaceId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $contentReferenceKey  The unique reference key for the A+ Content document. A content reference key cannot form a permalink and might change in the future. A content reference key is not guaranteed to match any A+ Content identifier.
     * @param  string  $marketplaceId  The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     * @param  array  $includedDataSet  The set of A+ Content data types to include in the response.
     */
    public function getContentDocument(
        string $contentReferenceKey,
        string $marketplaceId,
        array $includedDataSet,
    ): Response {
        $request = new GetContentDocument($contentReferenceKey, $marketplaceId, $includedDataSet);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $contentReferenceKey  The unique reference key for the A+ Content document. A content reference key cannot form a permalink and might change in the future. A content reference key is not guaranteed to match any A+ Content identifier.
     * @param  string  $marketplaceId  The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     */
    public function updateContentDocument(
        string $contentReferenceKey,
        PostContentDocumentRequest $postContentDocumentRequest,
        string $marketplaceId,
    ): Response {
        $request = new UpdateContentDocument($contentReferenceKey, $postContentDocumentRequest, $marketplaceId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $contentReferenceKey  The unique reference key for the A+ Content document. A content reference key cannot form a permalink and might change in the future. A content reference key is not guaranteed to match any A+ Content identifier.
     * @param  string  $marketplaceId  The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     * @param  ?array  $includedDataSet  The set of A+ Content data types to include in the response. If you don't include this parameter, the operation returns the related ASINs without metadata.
     * @param  ?array  $asinSet  The set of ASINs.
     * @param  ?string  $pageToken  A token that you use to fetch a specific page when there are multiple pages of results.
     */
    public function listContentDocumentAsinRelations(
        string $contentReferenceKey,
        string $marketplaceId,
        ?array $includedDataSet = null,
        ?array $asinSet = null,
        ?string $pageToken = null,
    ): Response {
        $request = new ListContentDocumentAsinRelations($contentReferenceKey, $marketplaceId, $includedDataSet, $asinSet, $pageToken);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $contentReferenceKey  The unique reference key for the A+ Content document. A content reference key cannot form a permalink and might change in the future. A content reference key is not guaranteed to match any A+ content identifier.
     * @param  string  $marketplaceId  The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     */
    public function postContentDocumentAsinRelations(
        string $contentReferenceKey,
        PostContentDocumentAsinRelationsRequest $postContentDocumentAsinRelationsRequest,
        string $marketplaceId,
    ): Response {
        $request = new PostContentDocumentAsinRelations($contentReferenceKey, $postContentDocumentAsinRelationsRequest, $marketplaceId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $marketplaceId  The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     * @param  ?array  $asinSet  The set of ASINs.
     */
    public function validateContentDocumentAsinRelations(
        PostContentDocumentRequest $postContentDocumentRequest,
        string $marketplaceId,
        ?array $asinSet = null,
    ): Response {
        $request = new ValidateContentDocumentAsinRelations($postContentDocumentRequest, $marketplaceId, $asinSet);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $marketplaceId  The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     * @param  string  $asin  The Amazon Standard Identification Number (ASIN) is the unique identifier of a product within a marketplace.
     * @param  ?string  $pageToken  A token that you use to fetch a specific page when there are multiple pages of results.
     */
    public function searchContentPublishRecords(string $marketplaceId, string $asin, ?string $pageToken = null): Response
    {
        $request = new SearchContentPublishRecords($marketplaceId, $asin, $pageToken);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $contentReferenceKey  The unique reference key for the A+ Content document. A content reference key cannot form a permalink and might change in the future. A content reference key is not guaranteed to match any A+ content identifier.
     * @param  string  $marketplaceId  The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     */
    public function postContentDocumentApprovalSubmission(string $contentReferenceKey, string $marketplaceId): Response
    {
        $request = new PostContentDocumentApprovalSubmission($contentReferenceKey, $marketplaceId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $contentReferenceKey  The unique reference key for the A+ Content document. A content reference key cannot form a permalink and might change in the future. A content reference key is not guaranteed to match any A+ content identifier.
     * @param  string  $marketplaceId  The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     */
    public function postContentDocumentSuspendSubmission(string $contentReferenceKey, string $marketplaceId): Response
    {
        $request = new PostContentDocumentSuspendSubmission($contentReferenceKey, $marketplaceId);

        return $this->connector->send($request);
    }
}
