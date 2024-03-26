<?php

namespace SellingPartnerApi\Seller\SellersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Marketplace extends BaseDto
{
    /**
     * @param  string  $id  The encrypted marketplace value.
     * @param  string  $name  Marketplace name.
     * @param  string  $countryCode  The ISO 3166-1 alpha-2 format country code of the marketplace.
     * @param  string  $defaultCurrencyCode  The ISO 4217 format currency code of the marketplace.
     * @param  string  $defaultLanguageCode  The ISO 639-1 format language code of the marketplace.
     * @param  string  $domainName  The domain name of the marketplace.
     */
    public function __construct(
        public readonly string $id,
        public readonly string $name,
        public readonly string $countryCode,
        public readonly string $defaultCurrencyCode,
        public readonly string $defaultLanguageCode,
        public readonly string $domainName,
    ) {
    }
}
