<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentInventoryV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Vendor\DirectFulfillmentInventoryV1\Dto\TransactionReference;

final class SubmitInventoryUpdateResponse extends BaseResponse
{
    /**
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?TransactionReference $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
