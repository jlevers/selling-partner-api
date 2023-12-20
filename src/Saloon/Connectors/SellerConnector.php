<?php declare(strict_types=1);

namespace SellingPartnerApi\Saloon\Connectors;

use SellingPartnerApi\Saloon\Seller\SellersV1Resource;

class SellerConnector extends BaseConnector
{
    public function sellers(): SellersV1Resource
    {
        return $this->sellersV1();
    }

    public function sellersV1(): SellersV1Resource
    {
        return new SellersV1Resource($this);
    }
}
