<?php

declare(strict_types=1);

namespace SellingPartnerApi\Enums;

use InvalidArgumentException;
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

    public static function byMarketplaceId(string $marketplaceId, bool $sandbox = false): self
    {
        return match ($marketplaceId) {
            'A2Q3Y263D00KWC', 'A2EUQ1WTGCTBG2', 'A1AM78C64UM0Y8', 'ATVPDKIKX0DER' => $sandbox ? self::NA_SANDBOX : self::NA,

            'A2VIGQ35RCS4UG', 'AMEN7PMS3EDWL', 'A1PA6795UKMFR9', 'ARBP9OOSHTCHU',
            'A1RKKUPIHCS9HS', 'A13V1IB3VIYZZH', 'A1F83G8C2ARO7P', 'A21TJRUUN4KGV',
            'APJ6JRA9NG5V4', 'A1805IZSGTT6HS', 'A1C3SOZRARQ6R3', 'A17E79C6D8DWNP',
            'A2NODRKZP88ZB9', 'A33AVAJ2PDY3EV', 'AE08WJ6YKNBMC' => $sandbox ? self::EU_SANDBOX : self::EU,

            'A19VAU5U5O7RUS', 'A39IBJ37TRP1C6', 'A1VC38T7YXB528' => $sandbox ? self::FE_SANDBOX : self::FE,

            default => throw new InvalidArgumentException("Unknown marketplace ID $marketplaceId"),
        };
    }

    public static function byCountryCode(string $countryCode, bool $sandbox = false): self
    {
        $countryToMarketplaceId = [
            'BR' => 'A2Q3Y263D00KWC',
            'CA' => 'A2EUQ1WTGCTBG2',
            'MX' => 'A1AM78C64UM0Y8',
            'US' => 'ATVPDKIKX0DER',

            'AE' => 'A2VIGQ35RCS4UG',
            'BE' => 'AMEN7PMS3EDWL',
            'DE' => 'A1PA6795UKMFR9',
            'EG' => 'ARBP9OOSHTCHU',
            'ES' => 'A1RKKUPIHCS9HS',
            'FR' => 'A13V1IB3VIYZZH',
            // UK and GB are both common country codes for the United Kingdom
            'GB' => 'A1F83G8C2ARO7P',
            'UK' => 'A1F83G8C2ARO7P',
            'IN' => 'A21TJRUUN4KGV',
            'IT' => 'APJ6JRA9NG5V4',
            'NL' => 'A1805IZSGTT6HS',
            'PL' => 'A1C3SOZRARQ6R3',
            'SA' => 'A17E79C6D8DWNP',
            'SE' => 'A2NODRKZP88ZB9',
            'TR' => 'A33AVAJ2PDY3EV',
            'ZA' => 'AE08WJ6YKNBMC',

            'AU' => 'A39IBJ37TRP1C6',
            'JP' => 'A1VC38T7YXB528',
            'SG' => 'A19VAU5U5O7RUS',
        ];

        if (! isset($countryToMarketplaceId[$countryCode])) {
            throw new InvalidArgumentException("Unknown country code $countryCode");
        }

        return self::byMarketplaceId($countryToMarketplaceId[$countryCode], $sandbox);
    }

    public static function byRegion(string $region, bool $sandbox = false): self
    {
        return match ($region) {
            'NA' => $sandbox ? self::NA_SANDBOX : self::NA,
            'EU' => $sandbox ? self::EU_SANDBOX : self::EU,
            'FE' => $sandbox ? self::FE_SANDBOX : self::FE,
            default => throw new InvalidArgumentException("Unknown region $region"),
        };
    }
}
