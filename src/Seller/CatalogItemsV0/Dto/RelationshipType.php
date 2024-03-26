<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class RelationshipType extends BaseDto
{
    protected static array $attributeMap = [
        'identifiers' => 'Identifiers',
        'color' => 'Color',
        'edition' => 'Edition',
        'flavor' => 'Flavor',
        'gemType' => 'GemType',
        'golfClubFlex' => 'GolfClubFlex',
        'handOrientation' => 'HandOrientation',
        'hardwarePlatform' => 'HardwarePlatform',
        'materialType' => 'MaterialType',
        'metalType' => 'MetalType',
        'model' => 'Model',
        'operatingSystem' => 'OperatingSystem',
        'productTypeSubcategory' => 'ProductTypeSubcategory',
        'ringSize' => 'RingSize',
        'shaftMaterial' => 'ShaftMaterial',
        'scent' => 'Scent',
        'size' => 'Size',
        'sizePerPearl' => 'SizePerPearl',
        'golfClubLoft' => 'GolfClubLoft',
        'totalDiamondWeight' => 'TotalDiamondWeight',
        'totalGemWeight' => 'TotalGemWeight',
        'packageQuantity' => 'PackageQuantity',
        'itemDimensions' => 'ItemDimensions',
    ];

    /**
     * @param  ?IdentifierType  $identifiers
     * @param  ?string  $color  The color variation of the item.
     * @param  ?string  $edition  The edition variation of the item.
     * @param  ?string  $flavor  The flavor variation of the item.
     * @param  ?string[]  $gemType  The gem type attributes of the item.
     * @param  ?string  $golfClubFlex  The golf club flex variation of an item.
     * @param  ?string  $handOrientation  The hand orientation variation of an item.
     * @param  ?string  $hardwarePlatform  The hardware platform variation of an item.
     * @param  ?string[]  $materialType  The material type attributes of the item.
     * @param  ?string  $metalType  The metal type variation of an item.
     * @param  ?string  $model  The model variation of an item.
     * @param  ?string[]  $operatingSystem  The operating system attributes of the item.
     * @param  ?string  $productTypeSubcategory  The product type subcategory variation of an item.
     * @param  ?string  $ringSize  The ring size variation of an item.
     * @param  ?string  $shaftMaterial  The shaft material variation of an item.
     * @param  ?string  $scent  The scent variation of an item.
     * @param  ?string  $size  The size variation of an item.
     * @param  ?string  $sizePerPearl  The size per pearl variation of an item.
     * @param  ?DecimalWithUnits  $golfClubLoft  The decimal value and unit.
     * @param  ?DecimalWithUnits  $totalDiamondWeight  The decimal value and unit.
     * @param  ?DecimalWithUnits  $totalGemWeight  The decimal value and unit.
     * @param  ?int  $packageQuantity  The package quantity variation of an item.
     * @param  ?DimensionType  $itemDimensions  The dimension type attribute of an item.
     */
    public function __construct(
        public readonly ?IdentifierType $identifiers = null,
        public readonly ?string $color = null,
        public readonly ?string $edition = null,
        public readonly ?string $flavor = null,
        public readonly ?array $gemType = null,
        public readonly ?string $golfClubFlex = null,
        public readonly ?string $handOrientation = null,
        public readonly ?string $hardwarePlatform = null,
        public readonly ?array $materialType = null,
        public readonly ?string $metalType = null,
        public readonly ?string $model = null,
        public readonly ?array $operatingSystem = null,
        public readonly ?string $productTypeSubcategory = null,
        public readonly ?string $ringSize = null,
        public readonly ?string $shaftMaterial = null,
        public readonly ?string $scent = null,
        public readonly ?string $size = null,
        public readonly ?string $sizePerPearl = null,
        public readonly ?DecimalWithUnits $golfClubLoft = null,
        public readonly ?DecimalWithUnits $totalDiamondWeight = null,
        public readonly ?DecimalWithUnits $totalGemWeight = null,
        public readonly ?int $packageQuantity = null,
        public readonly ?DimensionType $itemDimensions = null,
    ) {
    }
}
