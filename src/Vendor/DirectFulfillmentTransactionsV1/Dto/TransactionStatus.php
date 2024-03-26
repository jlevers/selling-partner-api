<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentTransactionsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TransactionStatus extends BaseDto
{
    /**
     * @param  ?Transaction  $transactionStatus  The transaction status details.
     */
    public function __construct(
        public readonly ?Transaction $transactionStatus = null,
    ) {
    }
}
