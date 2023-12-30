<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor;

use SellingPartnerApi\SellingPartnerApi;

class VendorConnector extends SellingPartnerApi
{
    public function directFulfillmentInventory(): DirectFulfillmentInventoryV1\Api
    {
        return $this->directFulfillmentInventoryV1();
    }

    public function directFulfillmentInventoryV1(): DirectFulfillmentInventoryV1\Api
    {
        return new DirectFulfillmentInventoryV1\Api($this);
    }
}
