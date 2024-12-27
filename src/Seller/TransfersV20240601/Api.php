<?php

namespace SellingPartnerApi\Seller\TransfersV20240601;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
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
     * @param  string  $marketplaceId  The identifier of the marketplace from which you want to retrieve payment methods. For the list of possible marketplace identifiers, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     * @param  ?array  $paymentMethodTypes  A comma-separated list of the payment method types you want to include in the response.
     */
    public function getPaymentMethods(string $marketplaceId, ?array $paymentMethodTypes = null): Response
    {
        $request = new GetPaymentMethods($marketplaceId, $paymentMethodTypes);

        return $this->connector->send($request);
    }
}
