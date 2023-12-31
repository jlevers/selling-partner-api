<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class RelationshipType extends BaseDto
{
    /**
     * @param  string  $color The color variation of the item.
     * @param  string  $edition The edition variation of the item.
     * @param  string  $flavor The flavor variation of the item.
     * @param  string[]  $gemType The gem type variations of the item.
     * @param  string  $golfClubFlex The golf club flex variation of an item.
     * @param  string  $handOrientation The hand orientation variation of an item.
     * @param  string  $hardwarePlatform The hardware platform variation of an item.
     * @param  string[]  $materialType The material type variations of an item.
     * @param  string  $metalType The metal type variation of an item.
     * @param  string  $model The model variation of an item.
     * @param  string[]  $operatingSystem The operating system variations of an item.
     * @param  string  $productTypeSubcategory The product type subcategory variation of an item.
     * @param  string  $ringSize The ring size variation of an item.
     * @param  string  $shaftMaterial The shaft material variation of an item.
     * @param  string  $scent The scent variation of an item.
     * @param  string  $size The size variation of an item.
     * @param  string  $sizePerPearl The size per pearl variation of an item.
     * @param  DecimalWithUnits  $golfClubLoft The decimal value and unit.
     * @param  DecimalWithUnits  $totalDiamondWeight The decimal value and unit.
     * @param  DecimalWithUnits  $totalGemWeight The decimal value and unit.
     * @param  int  $packageQuantity The package quantity variation of an item.
     * @param  DimensionType  $itemDimensions The dimension type attribute of an item.
     */
    public function __construct(
        public readonly IdentifierType $identifiers,
        public readonly string $color,
        public readonly string $edition,
        public readonly string $flavor,
        public readonly array $gemType,
        public readonly string $golfClubFlex,
        public readonly string $handOrientation,
        public readonly string $hardwarePlatform,
        public readonly array $materialType,
        public readonly string $metalType,
        public readonly string $model,
        public readonly array $operatingSystem,
        public readonly string $productTypeSubcategory,
        public readonly string $ringSize,
        public readonly string $shaftMaterial,
        public readonly string $scent,
        public readonly string $size,
        public readonly string $sizePerPearl,
        public readonly DecimalWithUnits $golfClubLoft,
        public readonly DecimalWithUnits $totalDiamondWeight,
        public readonly DecimalWithUnits $totalGemWeight,
        public readonly int $packageQuantity,
        public readonly DimensionType $itemDimensions,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
