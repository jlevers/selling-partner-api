<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller;

use SellingPartnerApi\SellingPartnerApi;

class SellerConnector extends SellingPartnerApi
{
    public function authorization(): AuthorizationV1\Api
    {
        return $this->authorizationV1();
    }

    public function fbaInboundEligibility(): FBAInboundEligibilityV1\Api
    {
        return $this->fbaInboundEligibilityV1();
    }

    public function orders(): OrdersV0\Api
    {
        return $this->ordersV0();
    }

    public function sellers(): SellersV1\Api
    {
        return $this->sellersV1();
    }

    public function authorizationV1(): AuthorizationV1\Api
    {
        return new AuthorizationV1\Api($this);
    }

    public function fbaInboundEligibilityV1(): FBAInboundEligibilityV1\Api
    {
        return new FBAInboundEligibilityV1\Api($this);
    }

    public function ordersV0(): OrdersV0\Api
    {
        return new OrdersV0\Api($this);
    }

    public function sellersV1(): SellersV1\Api
    {
        return new SellersV1\Api($this);
    }
}
