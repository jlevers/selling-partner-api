<?php

namespace SellingPartnerApi\Enums;

enum ApiCategory: string
{
    use EnumTrait;

    case SELLER = 'seller';
    case VENDOR = 'vendor';
}
