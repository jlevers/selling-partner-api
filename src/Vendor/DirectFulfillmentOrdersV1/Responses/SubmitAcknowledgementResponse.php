<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Dto\Error;
use SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Dto\TransactionId;

final class SubmitAcknowledgementResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?TransactionId  $payload
     * @param  Error[]  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?TransactionId $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
