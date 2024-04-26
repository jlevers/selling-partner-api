<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ApplicationManagementV20231130\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\ApplicationManagementV20231130\Dto\Error;

final class ErrorList extends Response
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  Error[]  $errors  array of errors
     */
    public function __construct(
        public readonly array $errors,
    ) {
    }
}
