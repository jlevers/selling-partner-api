<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\TokensV20210301\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\TokensV20210301\Dto\Error;

final class ErrorList extends Response
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  Error[]|null  $errors
     */
    public function __construct(
        public readonly ?array $errors = null,
    ) {
    }
}
