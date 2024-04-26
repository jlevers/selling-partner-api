<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentSandboxV20211028\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Vendor\DirectFulfillmentSandboxV20211028\Dto\Error;

final class ErrorList extends Response
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  Error[]  $errors
     */
    public function __construct(
        public readonly ?array $errors = null,
    ) {
    }
}
