<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentSandboxV20211028\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class TransactionReference extends BaseResponse
{
    public function __construct(
        public readonly ?string $transactionId = null,
    ) {
    }
}
