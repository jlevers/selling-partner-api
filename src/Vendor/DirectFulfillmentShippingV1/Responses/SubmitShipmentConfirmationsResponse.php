<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto\TransactionReference;

final class SubmitShipmentConfirmationsResponse extends BaseResponse
{
    /**
     * @param  ?TransactionReference  $transactionReference
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?TransactionReference $transactionReference = null,
        public readonly ?array $errors = null,
    ) {
    }
}
