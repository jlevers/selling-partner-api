<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentTransactionsV20211228;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Vendor\DirectFulfillmentTransactionsV20211228\Requests\GetTransactionStatus;

class Api extends BaseResource
{
    /**
     * @param  string  $transactionId Previously returned in the response to the POST request of a specific transaction.
     */
    public function getTransactionStatus(string $transactionId): Response
    {
        return $this->connector->send(new GetTransactionStatus($transactionId));
    }
}
