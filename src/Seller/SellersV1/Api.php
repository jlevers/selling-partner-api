<?php

namespace SellingPartnerApi\Seller\SellersV1;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\SellersV1\Requests\GetMarketplaceParticipations;

class Api extends BaseResource
{
    public function getMarketplaceParticipations(): Response
    {
        $request = new GetMarketplaceParticipations();

        return $this->connector->send($request);
    }
}
