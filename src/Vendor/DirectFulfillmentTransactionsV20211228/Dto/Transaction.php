<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentTransactionsV20211228\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;
use SellingPartnerApi\Vendor\DirectFulfillmentTransactionsV20211228\Responses\ErrorList;

final class Transaction extends BaseDto
{
    /**
     * @param  string  $transactionId  The unique identifier sent in the 'transactionId' field in response to the post request of a specific transaction.
     * @param  string  $status  Current processing status of the transaction.
     * @param  ?ErrorList  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly string $transactionId,
        public readonly string $status,
        public readonly ?ErrorList $errors = null,
    ) {
    }
}
