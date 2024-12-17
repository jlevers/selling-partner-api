<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor;

use SellingPartnerApi\SellingPartnerApi;

class VendorConnector extends SellingPartnerApi
{
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

    public function directFulfillmentSandboxV20211028(): DirectFulfillmentSandboxV20211028\Api
    {
        return new DirectFulfillmentSandboxV20211028\Api($this);
    }

    public function directFulfillmentShippingV20211228(): DirectFulfillmentShippingV20211228\Api
    {
        return new DirectFulfillmentShippingV20211228\Api($this);
    }

    public function directFulfillmentShippingV1(): DirectFulfillmentShippingV1\Api
    {
        return new DirectFulfillmentShippingV1\Api($this);
    }

    public function directFulfillmentTransactionsV20211228(): DirectFulfillmentTransactionsV20211228\Api
    {
        return new DirectFulfillmentTransactionsV20211228\Api($this);
    }

    public function directFulfillmentTransactionsV1(): DirectFulfillmentTransactionsV1\Api
    {
        return new DirectFulfillmentTransactionsV1\Api($this);
    }

    public function invoicesV1(): InvoicesV1\Api
    {
        return new InvoicesV1\Api($this);
    }

    public function ordersV1(): OrdersV1\Api
    {
        return new OrdersV1\Api($this);
    }

    public function shipmentsV1(): ShipmentsV1\Api
    {
        return new ShipmentsV1\Api($this);
    }

    public function transactionStatusV1(): TransactionStatusV1\Api
    {
        return new TransactionStatusV1\Api($this);
    }
}
