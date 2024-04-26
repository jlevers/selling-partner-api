<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\AuthorizationV1\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\AuthorizationV1\Dto\AuthorizationCode;
use SellingPartnerApi\Seller\AuthorizationV1\Dto\Error;

final class GetAuthorizationCodeResponse extends Response
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?AuthorizationCode  $payload  A Login with Amazon (LWA) authorization code.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?AuthorizationCode $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
