<?php

namespace SellingPartnerApi\Seller\ReplenishmentV20221107;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\ReplenishmentV20221107\Dto\GetSellingPartnerMetricsRequest;
use SellingPartnerApi\Seller\ReplenishmentV20221107\Dto\ListOfferMetricsRequest;
use SellingPartnerApi\Seller\ReplenishmentV20221107\Dto\ListOffersRequest;
use SellingPartnerApi\Seller\ReplenishmentV20221107\Requests\GetSellingPartnerMetrics;
use SellingPartnerApi\Seller\ReplenishmentV20221107\Requests\ListOfferMetrics;
use SellingPartnerApi\Seller\ReplenishmentV20221107\Requests\ListOffers;

class Api extends BaseResource
{
    /**
     * @param  GetSellingPartnerMetricsRequest  $getSellingPartnerMetricsRequest The request body for the `getSellingPartnerMetrics` operation.
     */
    public function getSellingPartnerMetrics(GetSellingPartnerMetricsRequest $getSellingPartnerMetricsRequest): Response
    {
        return $this->connector->send(new GetSellingPartnerMetrics($getSellingPartnerMetricsRequest));
    }

    /**
     * @param  ListOfferMetricsRequest  $listOfferMetricsRequest The request body for the `listOfferMetrics` operation.
     */
    public function listOfferMetrics(ListOfferMetricsRequest $listOfferMetricsRequest): Response
    {
        return $this->connector->send(new ListOfferMetrics($listOfferMetricsRequest));
    }

    /**
     * @param  ListOffersRequest  $listOffersRequest The request body for the `listOffers` operation.
     */
    public function listOffers(ListOffersRequest $listOffersRequest): Response
    {
        return $this->connector->send(new ListOffers($listOffersRequest));
    }
}
