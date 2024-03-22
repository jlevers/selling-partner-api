<?php

declare(strict_types=1);

namespace SellingPartnerApi\Enums;

use SellingPartnerApi\Traits\EnumTrait;

enum Endpoint: string
{
    use EnumTrait;

    case NA = 'https://sellingpartnerapi-na.amazon.com';
    case NA_SANDBOX = 'https://sandbox.sellingpartnerapi-na.amazon.com';
    case EU = 'https://sellingpartnerapi-eu.amazon.com';
    case EU_SANDBOX = 'https://sandbox.sellingpartnerapi-eu.amazon.com';
    case FE = 'https://sellingpartnerapi-fe.amazon.com';
    case FE_SANDBOX = 'https://sandbox.sellingpartnerapi-fe.amazon.com';

    public static function isSandbox(Endpoint $endpoint): bool
    {
        return in_array(
            $endpoint,
            [
                self::NA_SANDBOX,
                self::EU_SANDBOX,
                self::FE_SANDBOX,
            ],
            true
        );
    }

    public static function host(Endpoint $endpoint): string
    {
        return str_replace('https://', '', $endpoint->value);
    }
}
