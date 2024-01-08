<?php

namespace SellingPartnerApi\Seller\ProductPricingV20220501;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\ProductPricingV20220501\Dto\CompetitiveSummaryBatchRequest;
use SellingPartnerApi\Seller\ProductPricingV20220501\Dto\GetFeaturedOfferExpectedPriceBatchRequest;
use SellingPartnerApi\Seller\ProductPricingV20220501\Requests\GetCompetitiveSummary;
use SellingPartnerApi\Seller\ProductPricingV20220501\Requests\GetFeaturedOfferExpectedPriceBatch;

class Api extends BaseResource
{
    /**
     * @param  GetFeaturedOfferExpectedPriceBatchRequest  $getFeaturedOfferExpectedPriceBatchRequest The request body for the `getFeaturedOfferExpectedPriceBatch` operation.
     */
    public function getFeaturedOfferExpectedPriceBatch(
        GetFeaturedOfferExpectedPriceBatchRequest $getFeaturedOfferExpectedPriceBatchRequest,
    ): Response {
        return $this->connector->send(new GetFeaturedOfferExpectedPriceBatch($getFeaturedOfferExpectedPriceBatchRequest));
    }

    /**
     * @param  CompetitiveSummaryBatchRequest  $competitiveSummaryBatchRequest The `competitiveSummary` batch request data.
     */
    public function getCompetitiveSummary(CompetitiveSummaryBatchRequest $competitiveSummaryBatchRequest): Response
    {
        return $this->connector->send(new GetCompetitiveSummary($competitiveSummaryBatchRequest));
    }
}
