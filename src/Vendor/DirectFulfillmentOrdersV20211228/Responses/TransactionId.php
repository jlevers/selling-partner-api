<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class TransactionId extends BaseResponse
{
    /**
     * @param  ?string  $transactionId  GUID assigned by Amazon to identify this transaction. This value can be used with the Transaction Status API to return the status of this transaction.
     */
    public function __construct(
        public readonly ?string $transactionId = null,
    ) {
    }
}
