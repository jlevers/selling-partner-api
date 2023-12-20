<?php declare(strict_types=1);

namespace SellingPartnerApiSeller;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\SellersV1\Requests\GetMarketplaceParticipationsRequest;

class SellersV1Api extends BaseResource
{
    public function getMarketplaceParticipations(): Response
    {
        return $this->connector->send(new GetMarketplaceParticipationsRequest);
    }
}
