<?php

namespace SellingPartnerApi\Vendor\InvoicesV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Vendor\InvoicesV1\Dto\TransactionId;

final class SubmitInvoicesResponse extends BaseResponse
{
    /**
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?TransactionId $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
