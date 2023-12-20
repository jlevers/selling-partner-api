<?php declare(strict_types=1);

namespace SellingPartnerApi\Saloon\Seller;

use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use SellingPartnerApi\Saloon\Seller\SellersV1\Requests\GetMarketplaceParticipationsRequest;

class SellersV1Resource extends BaseResource
{
    public function getMarketplaceParticipations(): Response
    {
        return $this->connector->send(new GetMarketplaceParticipationsRequest);
    }
}
