<?php

namespace SellingPartnerApi\Vendor\OrdersV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Vendor\OrdersV1\Dto\TransactionId;

final class SubmitAcknowledgementResponse extends BaseResponse
{
    /**
     * @param  ?TransactionId  $transactionId
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?TransactionId $transactionId = null,
        public readonly ?array $errors = null,
    ) {
    }
}
