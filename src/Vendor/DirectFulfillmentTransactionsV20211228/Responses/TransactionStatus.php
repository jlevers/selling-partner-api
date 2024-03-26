<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentTransactionsV20211228\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Vendor\DirectFulfillmentTransactionsV20211228\Dto\Transaction;

final class TransactionStatus extends BaseResponse
{
    /**
     * @param  ?Transaction  $transactionStatus  The transaction status details.
     */
    public function __construct(
        public readonly ?Transaction $transactionStatus = null,
    ) {
    }
}
