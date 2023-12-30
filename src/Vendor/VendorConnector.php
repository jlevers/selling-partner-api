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

    public function directFulfillmentOrders(): DirectFulfillmentOrdersV20211228\Api
    {
        return $this->directFulfillmentOrdersV20211228();
    }

    public function directFulfillmentPayment(): DirectFulfillmentPaymentV1\Api
    {
        return $this->directFulfillmentPaymentV1();
    }

    public function directFulfillmentInventoryV1(): DirectFulfillmentInventoryV1\Api
    {
        return new DirectFulfillmentInventoryV1\Api($this);
    }

    public function directFulfillmentOrdersV20211228(): DirectFulfillmentOrdersV20211228\Api
    {
        return new DirectFulfillmentOrdersV20211228\Api($this);
    }

    public function directFulfillmentOrdersV1(): DirectFulfillmentOrdersV1\Api
    {
        return new DirectFulfillmentOrdersV1\Api($this);
    }

    public function directFulfillmentPaymentV1(): DirectFulfillmentPaymentV1\Api
    {
        return new DirectFulfillmentPaymentV1\Api($this);
    }
}
