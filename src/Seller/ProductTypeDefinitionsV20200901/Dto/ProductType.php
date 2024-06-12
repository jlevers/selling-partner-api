<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductTypeDefinitionsV20200901\Dto;

use SellingPartnerApi\Dto;

final class ProductType extends Dto
{
    /**
     * @param  string  $name  The name of the Amazon product type.
     * @param  string  $displayName  The human-readable and localized description of the Amazon product type.
     * @param  string[]  $marketplaceIds  The Amazon marketplace identifiers for which the product type definition is available.
     */
    public function __construct(
        public readonly string $name,
        public readonly string $displayName,
        public readonly array $marketplaceIds,
    ) {
    }
}
