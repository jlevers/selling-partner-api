<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductTypeDefinitionsV20200901\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\ProductTypeDefinitionsV20200901\Dto\ProductTypeVersion;
use SellingPartnerApi\Seller\ProductTypeDefinitionsV20200901\Dto\PropertyGroup;
use SellingPartnerApi\Seller\ProductTypeDefinitionsV20200901\Dto\SchemaLink;

final class ProductTypeDefinition extends Response
{
    protected static array $complexArrayTypes = ['propertyGroups' => PropertyGroup::class];

    /**
     * @param  string  $requirements  Name of the requirements set represented in this product type definition.
     * @param  string  $requirementsEnforced  Identifies if the required attributes for a requirements set are enforced by the product type definition schema. Non-enforced requirements enable structural validation of individual attributes without all of the required attributes being present (such as for partial updates).
     * @param  PropertyGroup[]  $propertyGroups  Mapping of property group names to property groups. Property groups represent logical groupings of schema properties that can be used for display or informational purposes.
     * @param  string  $locale  Locale of the display elements contained in the product type definition.
     * @param  string[]  $marketplaceIds  Amazon marketplace identifiers for which the product type definition is applicable.
     * @param  string  $productType  The name of the Amazon product type that this product type definition applies to.
     * @param  string  $displayName  Human-readable and localized description of the Amazon product type.
     * @param  ProductTypeVersion  $productTypeVersion  The version details for an Amazon product type.
     */
    public function __construct(
        public readonly SchemaLink $schema,
        public readonly string $requirements,
        public readonly string $requirementsEnforced,
        public readonly array $propertyGroups,
        public readonly string $locale,
        public readonly array $marketplaceIds,
        public readonly string $productType,
        public readonly string $displayName,
        public readonly ProductTypeVersion $productTypeVersion,
        public readonly ?SchemaLink $metaSchema = null,
    ) {}
}
