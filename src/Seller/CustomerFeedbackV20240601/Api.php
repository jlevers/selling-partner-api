<?php

namespace SellingPartnerApi\Seller\CustomerFeedbackV20240601;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\CustomerFeedbackV20240601\Requests\GetBrowseNodeReturnTopics;
use SellingPartnerApi\Seller\CustomerFeedbackV20240601\Requests\GetBrowseNodeReturnTrends;
use SellingPartnerApi\Seller\CustomerFeedbackV20240601\Requests\GetBrowseNodeReviewTopics;
use SellingPartnerApi\Seller\CustomerFeedbackV20240601\Requests\GetBrowseNodeReviewTrends;
use SellingPartnerApi\Seller\CustomerFeedbackV20240601\Requests\GetItemBrowseNode;
use SellingPartnerApi\Seller\CustomerFeedbackV20240601\Requests\GetItemReviewTopics;
use SellingPartnerApi\Seller\CustomerFeedbackV20240601\Requests\GetItemReviewTrends;

class Api extends BaseResource
{
    /**
     * @param  string  $asin  The Amazon Standard Identification Number (ASIN) is the unique identifier of a product within a marketplace. The value must be a child ASIN.
     * @param  string  $marketplaceId  The MarketplaceId is the globally unique identifier of a marketplace, you can refer to the marketplaceId here : https://developer-docs.amazon.com/sp-api/docs/marketplace-ids.
     * @param  string  $sortBy  The metric by which to sort data in the response.
     */
    public function getItemReviewTopics(string $asin, string $marketplaceId, string $sortBy): Response
    {
        $request = new GetItemReviewTopics($asin, $marketplaceId, $sortBy);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $asin  The Amazon Standard Identification Number (ASIN) is the unique identifier of a product within a marketplace.
     * @param  string  $marketplaceId  The MarketplaceId is the globally unique identifier of a marketplace, you can refer to the marketplaceId here : https://developer-docs.amazon.com/sp-api/docs/marketplace-ids.
     */
    public function getItemBrowseNode(string $asin, string $marketplaceId): Response
    {
        $request = new GetItemBrowseNode($asin, $marketplaceId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $browseNodeId  The ID of a browse node. A browse node is a named location in a browse tree that is used for navigation, product classification, and website content.
     * @param  string  $marketplaceId  The MarketplaceId is the globally unique identifier of a marketplace, you can refer to the marketplaceId here : https://developer-docs.amazon.com/sp-api/docs/marketplace-ids.
     * @param  string  $sortBy  The metric by which to sort the data in the response.
     */
    public function getBrowseNodeReviewTopics(string $browseNodeId, string $marketplaceId, string $sortBy): Response
    {
        $request = new GetBrowseNodeReviewTopics($browseNodeId, $marketplaceId, $sortBy);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $asin  The Amazon Standard Identification Number (ASIN) is the unique identifier of a product within a marketplace. This API takes child ASIN as an input.
     * @param  string  $marketplaceId  The MarketplaceId is the globally unique identifier of a marketplace, you can refer to the marketplaceId here : https://developer-docs.amazon.com/sp-api/docs/marketplace-ids.
     */
    public function getItemReviewTrends(string $asin, string $marketplaceId): Response
    {
        $request = new GetItemReviewTrends($asin, $marketplaceId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $browseNodeId  A browse node ID is a unique identifier of a browse node. A browse node is a named location in a browse tree that is used for navigation, product classification, and website content.
     * @param  string  $marketplaceId  The marketplace ID is the globally unique identifier of a marketplace. For more information, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     */
    public function getBrowseNodeReviewTrends(string $browseNodeId, string $marketplaceId): Response
    {
        $request = new GetBrowseNodeReviewTrends($browseNodeId, $marketplaceId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $browseNodeId  A browse node ID is a unique identifier for a browse node. A browse node is a named location in a browse tree that is used for navigation, product classification, and website content.
     * @param  string  $marketplaceId  The MarketplaceId is the globally unique identifier of a marketplace, you can refer to the marketplaceId here : https://developer-docs.amazon.com/sp-api/docs/marketplace-ids.
     */
    public function getBrowseNodeReturnTopics(string $browseNodeId, string $marketplaceId): Response
    {
        $request = new GetBrowseNodeReturnTopics($browseNodeId, $marketplaceId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $browseNodeId  A browse node ID is a unique identifier of a browse node. A browse node is a named location in a browse tree that is used for navigation, product classification, and website content.
     * @param  string  $marketplaceId  The MarketplaceId is the globally unique identifier of a marketplace, you can refer to the marketplaceId here : https://developer-docs.amazon.com/sp-api/docs/marketplace-ids.
     */
    public function getBrowseNodeReturnTrends(string $browseNodeId, string $marketplaceId): Response
    {
        $request = new GetBrowseNodeReturnTrends($browseNodeId, $marketplaceId);

        return $this->connector->send($request);
    }
}
