<?php

namespace SellingPartnerApi\Seller\ProductFeesV0;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\ProductFeesV0\Dto\GetMyFeesEstimateRequest;
use SellingPartnerApi\Seller\ProductFeesV0\Requests\GetMyFeesEstimateForAsin;
use SellingPartnerApi\Seller\ProductFeesV0\Requests\GetMyFeesEstimateForSku;
use SellingPartnerApi\Seller\ProductFeesV0\Requests\GetMyFeesEstimates;

class Api extends BaseResource
{
    /**
     * @param  string  $sellerSku Used to identify an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.
     * @param  GetMyFeesEstimateRequest  $getMyFeesEstimateRequest Request schema.
     */
    public function getMyFeesEstimateForSku(
        string $sellerSku,
        GetMyFeesEstimateRequest $getMyFeesEstimateRequest,
    ): Response {
        return $this->connector->send(new GetMyFeesEstimateForSku($sellerSku, $getMyFeesEstimateRequest));
    }

    /**
     * @param  string  $asin The Amazon Standard Identification Number (ASIN) of the item.
     * @param  GetMyFeesEstimateRequest  $getMyFeesEstimateRequest Request schema.
     */
    public function getMyFeesEstimateForAsin(string $asin, GetMyFeesEstimateRequest $getMyFeesEstimateRequest): Response
    {
        return $this->connector->send(new GetMyFeesEstimateForAsin($asin, $getMyFeesEstimateRequest));
    }

    /**
     * @param  FeesEstimateByIdRequest[]  $getMyFeesEstimatesRequest Request for estimated fees for a list of products.
     */
    public function getMyFeesEstimates(array $getMyFeesEstimatesRequest): Response
    {
        return $this->connector->send(new GetMyFeesEstimates($getMyFeesEstimatesRequest));
    }
}
