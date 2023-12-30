<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentSandboxV20211028\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Pagination extends BaseDto
{
    public function __construct(
        public readonly ?string $nextToken = null,
    ) {
    }
}
