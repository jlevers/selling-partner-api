<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AttributeSetListType extends BaseDto
{
    protected static array $complexArrayTypes = ['creator' => [CreatorType::class], 'languages' => [LanguageType::class]];

    /**
     * @param  string[]  $actor The actor attributes of the item.
     * @param  string[]  $artist The artist attributes of the item.
     * @param  string  $aspectRatio The aspect ratio attribute of the item.
     * @param  string  $audienceRating The audience rating attribute of the item.
     * @param  string[]  $author The author attributes of the item.
     * @param  string  $backFinding The back finding attribute of the item.
     * @param  string  $bandMaterialType The band material type attribute of the item.
     * @param  string  $binding The binding attribute of the item.
     * @param  string  $blurayRegion The Bluray region attribute of the item.
     * @param  string  $brand The brand attribute of the item.
     * @param  string  $ceroAgeRating The CERO age rating attribute of the item.
     * @param  string  $chainType The chain type attribute of the item.
     * @param  string  $claspType The clasp type attribute of the item.
     * @param  string  $color The color attribute of the item.
     * @param  string  $cpuManufacturer The CPU manufacturer attribute of the item.
     * @param  DecimalWithUnits  $cpuSpeed The decimal value and unit.
     * @param  string  $cpuType The CPU type attribute of the item.
     * @param  CreatorType[]  $creator The creator attributes of the item.
     * @param  string  $department The department attribute of the item.
     * @param  string[]  $director The director attributes of the item.
     * @param  DecimalWithUnits  $displaySize The decimal value and unit.
     * @param  string  $edition The edition attribute of the item.
     * @param  string  $episodeSequence The episode sequence attribute of the item.
     * @param  string  $esrbAgeRating The ESRB age rating attribute of the item.
     * @param  string[]  $feature The feature attributes of the item
     * @param  string  $flavor The flavor attribute of the item.
     * @param  string[]  $format The format attributes of the item.
     * @param  string[]  $gemType The gem type attributes of the item.
     * @param  string  $genre The genre attribute of the item.
     * @param  string  $golfClubFlex The golf club flex attribute of the item.
     * @param  DecimalWithUnits  $golfClubLoft The decimal value and unit.
     * @param  string  $handOrientation The hand orientation attribute of the item.
     * @param  string  $hardDiskInterface The hard disk interface attribute of the item.
     * @param  DecimalWithUnits  $hardDiskSize The decimal value and unit.
     * @param  string  $hardwarePlatform The hardware platform attribute of the item.
     * @param  string  $hazardousMaterialType The hazardous material type attribute of the item.
     * @param  DimensionType  $itemDimensions The dimension type attribute of an item.
     * @param  bool  $isAdultProduct The adult product attribute of the item.
     * @param  bool  $isAutographed The autographed attribute of the item.
     * @param  bool  $isEligibleForTradeIn The is eligible for trade in attribute of the item.
     * @param  bool  $isMemorabilia The is memorabilia attribute of the item.
     * @param  string  $issuesPerYear The issues per year attribute of the item.
     * @param  string  $itemPartNumber The item part number attribute of the item.
     * @param  string  $label The label attribute of the item.
     * @param  LanguageType[]  $languages The languages attribute of the item.
     * @param  string  $legalDisclaimer The legal disclaimer attribute of the item.
     * @param  Price  $listPrice The price attribute of the item.
     * @param  string  $manufacturer The manufacturer attribute of the item.
     * @param  DecimalWithUnits  $manufacturerMaximumAge The decimal value and unit.
     * @param  DecimalWithUnits  $manufacturerMinimumAge The decimal value and unit.
     * @param  string  $manufacturerPartsWarrantyDescription The manufacturer parts warranty description attribute of the item.
     * @param  string[]  $materialType The material type attributes of the item.
     * @param  DecimalWithUnits  $maximumResolution The decimal value and unit.
     * @param  string[]  $mediaType The media type attributes of the item.
     * @param  string  $metalStamp The metal stamp attribute of the item.
     * @param  string  $metalType The metal type attribute of the item.
     * @param  string  $model The model attribute of the item.
     * @param  int  $numberOfDiscs The number of discs attribute of the item.
     * @param  int  $numberOfIssues The number of issues attribute of the item.
     * @param  int  $numberOfItems The number of items attribute of the item.
     * @param  int  $numberOfPages The number of pages attribute of the item.
     * @param  int  $numberOfTracks The number of tracks attribute of the item.
     * @param  string[]  $operatingSystem The operating system attributes of the item.
     * @param  DecimalWithUnits  $opticalZoom The decimal value and unit.
     * @param  DimensionType  $packageDimensions The dimension type attribute of an item.
     * @param  int  $packageQuantity The package quantity attribute of the item.
     * @param  string  $partNumber The part number attribute of the item.
     * @param  string  $pegiRating The PEGI rating attribute of the item.
     * @param  string[]  $platform The platform attributes of the item.
     * @param  int  $processorCount The processor count attribute of the item.
     * @param  string  $productGroup The product group attribute of the item.
     * @param  string  $productTypeName The product type name attribute of the item.
     * @param  string  $productTypeSubcategory The product type subcategory attribute of the item.
     * @param  string  $publicationDate The publication date attribute of the item.
     * @param  string  $publisher The publisher attribute of the item.
     * @param  string  $regionCode The region code attribute of the item.
     * @param  string  $releaseDate The release date attribute of the item.
     * @param  string  $ringSize The ring size attribute of the item.
     * @param  DecimalWithUnits  $runningTime The decimal value and unit.
     * @param  string  $shaftMaterial The shaft material attribute of the item.
     * @param  string  $scent The scent attribute of the item.
     * @param  string  $seasonSequence The season sequence attribute of the item.
     * @param  string  $seikodoProductCode The Seikodo product code attribute of the item.
     * @param  string  $size The size attribute of the item.
     * @param  string  $sizePerPearl The size per pearl attribute of the item.
     * @param  Image  $smallImage The image attribute of the item.
     * @param  string  $studio The studio attribute of the item.
     * @param  DecimalWithUnits  $subscriptionLength The decimal value and unit.
     * @param  DecimalWithUnits  $systemMemorySize The decimal value and unit.
     * @param  string  $systemMemoryType The system memory type attribute of the item.
     * @param  string  $theatricalReleaseDate The theatrical release date attribute of the item.
     * @param  string  $title The title attribute of the item.
     * @param  DecimalWithUnits  $totalDiamondWeight The decimal value and unit.
     * @param  DecimalWithUnits  $totalGemWeight The decimal value and unit.
     * @param  string  $warranty The warranty attribute of the item.
     * @param  Price  $weeeTaxValue The price attribute of the item.
     */
    public function __construct(
        public readonly array $actor,
        public readonly array $artist,
        public readonly string $aspectRatio,
        public readonly string $audienceRating,
        public readonly array $author,
        public readonly string $backFinding,
        public readonly string $bandMaterialType,
        public readonly string $binding,
        public readonly string $blurayRegion,
        public readonly string $brand,
        public readonly string $ceroAgeRating,
        public readonly string $chainType,
        public readonly string $claspType,
        public readonly string $color,
        public readonly string $cpuManufacturer,
        public readonly DecimalWithUnits $cpuSpeed,
        public readonly string $cpuType,
        public readonly array $creator,
        public readonly string $department,
        public readonly array $director,
        public readonly DecimalWithUnits $displaySize,
        public readonly string $edition,
        public readonly string $episodeSequence,
        public readonly string $esrbAgeRating,
        public readonly array $feature,
        public readonly string $flavor,
        public readonly array $format,
        public readonly array $gemType,
        public readonly string $genre,
        public readonly string $golfClubFlex,
        public readonly DecimalWithUnits $golfClubLoft,
        public readonly string $handOrientation,
        public readonly string $hardDiskInterface,
        public readonly DecimalWithUnits $hardDiskSize,
        public readonly string $hardwarePlatform,
        public readonly string $hazardousMaterialType,
        public readonly DimensionType $itemDimensions,
        public readonly bool $isAdultProduct,
        public readonly bool $isAutographed,
        public readonly bool $isEligibleForTradeIn,
        public readonly bool $isMemorabilia,
        public readonly string $issuesPerYear,
        public readonly string $itemPartNumber,
        public readonly string $label,
        public readonly array $languages,
        public readonly string $legalDisclaimer,
        public readonly Price $listPrice,
        public readonly string $manufacturer,
        public readonly DecimalWithUnits $manufacturerMaximumAge,
        public readonly DecimalWithUnits $manufacturerMinimumAge,
        public readonly string $manufacturerPartsWarrantyDescription,
        public readonly array $materialType,
        public readonly DecimalWithUnits $maximumResolution,
        public readonly array $mediaType,
        public readonly string $metalStamp,
        public readonly string $metalType,
        public readonly string $model,
        public readonly int $numberOfDiscs,
        public readonly int $numberOfIssues,
        public readonly int $numberOfItems,
        public readonly int $numberOfPages,
        public readonly int $numberOfTracks,
        public readonly array $operatingSystem,
        public readonly DecimalWithUnits $opticalZoom,
        public readonly DimensionType $packageDimensions,
        public readonly int $packageQuantity,
        public readonly string $partNumber,
        public readonly string $pegiRating,
        public readonly array $platform,
        public readonly int $processorCount,
        public readonly string $productGroup,
        public readonly string $productTypeName,
        public readonly string $productTypeSubcategory,
        public readonly string $publicationDate,
        public readonly string $publisher,
        public readonly string $regionCode,
        public readonly string $releaseDate,
        public readonly string $ringSize,
        public readonly DecimalWithUnits $runningTime,
        public readonly string $shaftMaterial,
        public readonly string $scent,
        public readonly string $seasonSequence,
        public readonly string $seikodoProductCode,
        public readonly string $size,
        public readonly string $sizePerPearl,
        public readonly Image $smallImage,
        public readonly string $studio,
        public readonly DecimalWithUnits $subscriptionLength,
        public readonly DecimalWithUnits $systemMemorySize,
        public readonly string $systemMemoryType,
        public readonly string $theatricalReleaseDate,
        public readonly string $title,
        public readonly DecimalWithUnits $totalDiamondWeight,
        public readonly DecimalWithUnits $totalGemWeight,
        public readonly string $warranty,
        public readonly Price $weeeTaxValue,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
