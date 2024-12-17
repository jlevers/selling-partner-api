<?php

namespace SellingPartnerApi\Seller\SolicitationsV1;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\SolicitationsV1\Requests\CreateProductReviewAndSellerFeedbackSolicitation;
use SellingPartnerApi\Seller\SolicitationsV1\Requests\GetSolicitationActionsForOrder;

class Api extends BaseResource
{
    /**
     * @param  string  $amazonOrderId  An Amazon order identifier. This specifies the order for which you want a list of available solicitation types.
     * @param  array  $marketplaceIds  A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
     */
    public function getSolicitationActionsForOrder(string $amazonOrderId, array $marketplaceIds): Response
    {
        $request = new GetSolicitationActionsForOrder($amazonOrderId, $marketplaceIds);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $amazonOrderId  An Amazon order identifier. This specifies the order for which a solicitation is sent.
     * @param  array  $marketplaceIds  A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
     */
    public function createProductReviewAndSellerFeedbackSolicitation(
        string $amazonOrderId,
        array $marketplaceIds,
    ): Response {
        $request = new CreateProductReviewAndSellerFeedbackSolicitation($amazonOrderId, $marketplaceIds);

        return $this->connector->send($request);
    }
}
