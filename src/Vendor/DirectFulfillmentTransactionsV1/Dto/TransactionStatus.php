<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentTransactionsV1\Dto;

use SellingPartnerApi\Dto;

final class TransactionStatus extends Dto
{
    /**
     * @param  ?Transaction  $transactionStatus  The transaction status details.
     */
    public function __construct(
        public readonly ?Transaction $transactionStatus = null,
    ) {
    }
}
