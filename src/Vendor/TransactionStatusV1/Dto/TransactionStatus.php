<?php

namespace SellingPartnerApi\Vendor\TransactionStatusV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TransactionStatus extends BaseDto
{
    /**
     * @param  ?Transaction  $transactionStatus  The transaction status.
     */
    public function __construct(
        public readonly ?Transaction $transactionStatus = null,
    ) {
    }
}
