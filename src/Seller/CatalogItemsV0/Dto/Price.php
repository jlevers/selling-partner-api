<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV0\Dto;

use SellingPartnerApi\Dto;

final class Price extends Dto
{
    protected static array $attributeMap = ['amount' => 'Amount', 'currencyCode' => 'CurrencyCode'];

    /**
     * @param  ?float  $amount  The amount.
     * @param  ?string  $currencyCode  The currency code of the amount.
     */
    public function __construct(
        public ?float $amount = null,
        public ?string $currencyCode = null,
    ) {}
}
