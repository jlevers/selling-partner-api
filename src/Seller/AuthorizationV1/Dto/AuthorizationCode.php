<?php

namespace SellingPartnerApi\Seller\AuthorizationV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AuthorizationCode extends BaseDto
{
    /**
     * @param  ?string  $authorizationCode  A Login with Amazon (LWA) authorization code that can be exchanged for a refresh token and access token that authorize you to make calls to a Selling Partner API.
     */
    public function __construct(
        public readonly ?string $authorizationCode = null,
    ) {
    }
}
