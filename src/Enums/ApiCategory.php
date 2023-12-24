<?php

declare(strict_types=1);

namespace SellingPartnerApi\Enums;

enum ApiCategory: string
{
    use EnumTrait;

    case SELLER = 'seller';
    case VENDOR = 'vendor';
}
