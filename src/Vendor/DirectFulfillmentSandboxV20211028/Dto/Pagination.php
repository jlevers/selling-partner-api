<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentSandboxV20211028\Dto;

use SellingPartnerApi\Dto;

final class Pagination extends Dto
{
    /**
     * @param  ?string  $nextToken
     */
    public function __construct(
        public readonly ?string $nextToken = null,
    ) {
    }
}
