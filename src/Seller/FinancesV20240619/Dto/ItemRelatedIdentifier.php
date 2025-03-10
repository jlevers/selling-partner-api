<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV20240619\Dto;

use SellingPartnerApi\Dto;

final class ItemRelatedIdentifier extends Dto
{
    /**
     * @param  ?string  $itemRelatedIdentifierName  Enumerated set of related item identifier names for the item.
     * @param  ?string  $itemRelatedIdentifierValue  Corresponding value of ItemRelatedIdentifierName
     */
    public function __construct(
        public ?string $itemRelatedIdentifierName = null,
        public ?string $itemRelatedIdentifierValue = null,
    ) {}
}
