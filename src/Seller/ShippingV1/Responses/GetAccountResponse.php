<?php

namespace SellingPartnerApi\Seller\ShippingV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ShippingV1\Dto\Account;

final class GetAccountResponse extends BaseResponse
{
    /**
     * @param  Account  $payload The account related data.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly Account $payload,
        public readonly array $errors,
    ) {
    }
}
