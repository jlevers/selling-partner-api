<?php

declare(strict_types=1);

namespace SellingPartnerApi\Enums;

use SellingPartnerApi\Traits\EnumTrait;

enum Region: string
{
    use EnumTrait;

    case NA = 'NA';
    case EU = 'EU';
    case FE = 'FE';
}
