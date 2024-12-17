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

    public static function byMarketplaceId(string|Marketplace $marketplaceId, bool $sandbox = false): self
    {
        if (is_string($marketplaceId)) {
            $marketplaceId = Marketplace::from($marketplaceId);
        }

        return match (Marketplace::toRegion($marketplaceId)) {
            Region::NA => $sandbox ? self::NA_SANDBOX : self::NA,
            Region::EU => $sandbox ? self::EU_SANDBOX : self::EU,
            Region::FE => $sandbox ? self::FE_SANDBOX : self::FE,
        };
    }

    public static function byCountryCode(string $countryCode, bool $sandbox = false): self
    {
        // UK and GB are both common country codes for the United Kingdom
        $marketplace = $countryCode === 'UK'
            ? Marketplace::GB
            : Marketplace::fromCountryCode($countryCode);

        return self::byMarketplaceId($marketplace, $sandbox);
    }

    public static function byRegion(string|Region $region, bool $sandbox = false): self
    {
        if (is_string($region)) {
            $region = Region::from($region);
        }

        return match ($region) {
            Region::NA => $sandbox ? self::NA_SANDBOX : self::NA,
            Region::EU => $sandbox ? self::EU_SANDBOX : self::EU,
            Region::FE => $sandbox ? self::FE_SANDBOX : self::FE,
        };
    }
}
