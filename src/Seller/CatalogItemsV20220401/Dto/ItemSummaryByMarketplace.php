<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemSummaryByMarketplace extends BaseDto
{
    protected static array $complexArrayTypes = ['contributors' => [ItemContributor::class]];

    /**
     * @param  string  $marketplaceId  Amazon marketplace identifier.
     * @param  ?bool  $adultProduct  Identifies an Amazon catalog item is intended for an adult audience or is sexual in nature.
     * @param  ?bool  $autographed  Identifies an Amazon catalog item is autographed by a player or celebrity.
     * @param  ?string  $brand  Name of the brand associated with an Amazon catalog item.
     * @param  ?ItemBrowseClassification  $browseClassification  Classification (browse node) associated with an Amazon catalog item.
     * @param  ?string  $color  Name of the color associated with an Amazon catalog item.
     * @param  ItemContributor[]|null  $contributors  Individual contributors to the creation of an item, such as the authors or actors.
     * @param  ?string  $itemClassification  Classification type associated with the Amazon catalog item.
     * @param  ?string  $itemName  Name, or title, associated with an Amazon catalog item.
     * @param  ?string  $manufacturer  Name of the manufacturer associated with an Amazon catalog item.
     * @param  ?bool  $memorabilia  Identifies an Amazon catalog item is memorabilia valued for its connection with historical events, culture, or entertainment.
     * @param  ?string  $modelNumber  Model number associated with an Amazon catalog item.
     * @param  ?int  $packageQuantity  Quantity of an Amazon catalog item in one package.
     * @param  ?string  $partNumber  Part number associated with an Amazon catalog item.
     * @param  ?DateTime  $releaseDate  First date on which an Amazon catalog item is shippable to customers.
     * @param  ?string  $size  Name of the size associated with an Amazon catalog item.
     * @param  ?string  $style  Name of the style associated with an Amazon catalog item.
     * @param  ?bool  $tradeInEligible  Identifies an Amazon catalog item is eligible for trade-in.
     * @param  ?string  $websiteDisplayGroup  Identifier of the website display group associated with an Amazon catalog item.
     * @param  ?string  $websiteDisplayGroupName  Display name of the website display group associated with an Amazon catalog item.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly ?bool $adultProduct = null,
        public readonly ?bool $autographed = null,
        public readonly ?string $brand = null,
        public readonly ?ItemBrowseClassification $browseClassification = null,
        public readonly ?string $color = null,
        public readonly ?array $contributors = null,
        public readonly ?string $itemClassification = null,
        public readonly ?string $itemName = null,
        public readonly ?string $manufacturer = null,
        public readonly ?bool $memorabilia = null,
        public readonly ?string $modelNumber = null,
        public readonly ?int $packageQuantity = null,
        public readonly ?string $partNumber = null,
        public readonly ?\DateTime $releaseDate = null,
        public readonly ?string $size = null,
        public readonly ?string $style = null,
        public readonly ?bool $tradeInEligible = null,
        public readonly ?string $websiteDisplayGroup = null,
        public readonly ?string $websiteDisplayGroupName = null,
    ) {
    }
}
