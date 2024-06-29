<?php

namespace SellingPartnerApi\Seller\TransfersV20240601;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\TransfersV20240601\Dto\GetPaymentMethodsRequest;
use SellingPartnerApi\Seller\TransfersV20240601\Dto\InitiatePayoutRequest;
use SellingPartnerApi\Seller\TransfersV20240601\Requests\GetPaymentMethods;
use SellingPartnerApi\Seller\TransfersV20240601\Requests\InitiatePayout;

class Api extends BaseResource
{
    /**
     * @param  InitiatePayoutRequest  $initiatePayoutRequest  The request schema for the `initiatePayout` operation.
     */
    public function initiatePayout(InitiatePayoutRequest $initiatePayoutRequest): Response
    {
        $request = new InitiatePayout($initiatePayoutRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  GetPaymentMethodsRequest  $getPaymentMethodsRequest  The request schema for the `getPaymentMethods` operation.
     */
    public function getPaymentMethods(GetPaymentMethodsRequest $getPaymentMethodsRequest): Response
    {
        $request = new GetPaymentMethods($getPaymentMethodsRequest);

        return $this->connector->send($request);
    }
}
