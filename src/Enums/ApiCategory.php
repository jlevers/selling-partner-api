<?php

declare(strict_types=1);

namespace SellingPartnerApi\Enums;

use SellingPartnerApi\Traits\EnumTrait;

enum ApiCategory: string
{
    use EnumTrait;

    case SELLER = 'seller';
    case VENDOR = 'vendor';
}
