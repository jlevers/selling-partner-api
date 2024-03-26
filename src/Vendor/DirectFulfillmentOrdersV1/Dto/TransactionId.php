<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TransactionId extends BaseDto
{
    /**
     * @param  ?string  $transactionId  GUID assigned by Amazon to identify this transaction. This value can be used with the Transaction Status API to return the status of this transaction.
     */
    public function __construct(
        public readonly ?string $transactionId = null,
    ) {
    }
}
