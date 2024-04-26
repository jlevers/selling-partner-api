<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\TransactionStatusV1\Dto;

use SellingPartnerApi\Dto;

final class TransactionStatus extends Dto
{
    /**
     * @param  ?Transaction  $transactionStatus  The transaction status.
     */
    public function __construct(
        public readonly ?Transaction $transactionStatus = null,
    ) {
    }
}
