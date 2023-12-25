<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller;

use SellingPartnerApi\SellingPartnerApi;

class SellerConnector extends SellingPartnerApi
{
    public function sellers(): SellersV1\Api
    {
        return $this->sellersV1();
    }

    public function sellersV1(): SellersV1\Api
    {
        return new SellersV1\Api($this);
    }
}
