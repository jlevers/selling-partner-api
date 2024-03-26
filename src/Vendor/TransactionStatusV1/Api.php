<?php

namespace SellingPartnerApi\Vendor\TransactionStatusV1;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Vendor\TransactionStatusV1\Requests\GetTransaction;

class Api extends BaseResource
{
    /**
     * @param  string  $transactionId  The GUID provided by Amazon in the 'transactionId' field in response to the post request of a specific transaction.
     */
    public function getTransaction(string $transactionId): Response
    {
        $request = new GetTransaction($transactionId);

        return $this->connector->send($request);
    }
}
