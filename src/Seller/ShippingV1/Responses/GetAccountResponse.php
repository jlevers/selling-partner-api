<?php

namespace SellingPartnerApi\Seller\ShippingV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ShippingV1\Dto\Account;
use SellingPartnerApi\Seller\ShippingV1\Dto\Error;

final class GetAccountResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?Account  $payload  The account related data.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?Account $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
