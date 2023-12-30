<?php

namespace SellingPartnerApi\Seller\AuthorizationV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\AuthorizationV1\Dto\AuthorizationCode;

final class GetAuthorizationCodeResponse extends BaseResponse
{
    /**
     * @param  AuthorizationCode  $payload A Login with Amazon (LWA) authorization code.
     * @param  Error[]  $errors A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?AuthorizationCode $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
