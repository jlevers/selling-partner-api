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
     * @param  string  $sellerSku  Used to identify an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.
     * @param  GetMyFeesEstimateRequest  $getMyFeesEstimateRequest  Request schema.
     */
    public function getMyFeesEstimateForSku(
        string $sellerSku,
        GetMyFeesEstimateRequest $getMyFeesEstimateRequest,
    ): Response {
        $request = new GetMyFeesEstimateForSku($sellerSku, $getMyFeesEstimateRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     * @param  GetMyFeesEstimateRequest  $getMyFeesEstimateRequest  Request schema.
     */
    public function getMyFeesEstimateForAsin(string $asin, GetMyFeesEstimateRequest $getMyFeesEstimateRequest): Response
    {
        $request = new GetMyFeesEstimateForAsin($asin, $getMyFeesEstimateRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  FeesEstimateByIdRequest[]  $getMyFeesEstimatesRequest  Request for estimated fees for a list of products.
     */
    public function getMyFeesEstimates(array $getMyFeesEstimatesRequest): Response
    {
        $request = new GetMyFeesEstimates($getMyFeesEstimatesRequest);

        return $this->connector->send($request);
    }
}
