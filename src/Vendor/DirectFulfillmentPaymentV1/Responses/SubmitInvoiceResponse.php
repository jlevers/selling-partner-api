<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentPaymentV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Vendor\DirectFulfillmentPaymentV1\Dto\Error;
use SellingPartnerApi\Vendor\DirectFulfillmentPaymentV1\Dto\TransactionReference;

final class SubmitInvoiceResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?TransactionReference  $payload
     * @param  Error[]  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?TransactionReference $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
