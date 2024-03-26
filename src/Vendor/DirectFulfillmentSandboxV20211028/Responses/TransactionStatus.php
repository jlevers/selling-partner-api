<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentSandboxV20211028\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Vendor\DirectFulfillmentSandboxV20211028\Dto\Transaction;

final class TransactionStatus extends BaseResponse
{
    /**
     * @param  ?Transaction  $transactionStatus  The transaction details including the status. If the transaction was successful, also includes the requested test order data.
     */
    public function __construct(
        public readonly ?Transaction $transactionStatus = null,
    ) {
    }
}
