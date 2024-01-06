<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentTransactionsV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Vendor\DirectFulfillmentTransactionsV1\Dto\TransactionStatus;

final class GetTransactionResponse extends BaseResponse
{
    /**
     * @param  TransactionStatus  $payload The payload for the getTransactionStatus operation.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly TransactionStatus $payload,
        public readonly array $errors,
    ) {
    }
}
