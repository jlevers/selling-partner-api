<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Dto;

use SellingPartnerApi\Dto;

final class ItemSummaryByMarketplace extends Dto
{
    protected static array $complexArrayTypes = ['contributors' => ItemContributor::class];

    /**
     * @param  string  $marketplaceId  Amazon marketplace identifier. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     * @param  ?bool  $adultProduct  When `true`, the Amazon catalog item is intended for an adult audience or is sexual in nature.
     * @param  ?bool  $autographed  When `true`, the Amazon catalog item is autographed.
     * @param  ?string  $brand  Name of the brand that is associated with the Amazon catalog item.
     * @param  ?ItemBrowseClassification  $browseClassification  Classification (browse node) for an Amazon catalog item.
     * @param  ?string  $color  The color that is associated with the Amazon catalog item.
     * @param  ItemContributor[]|null  $contributors  Individual contributors to the creation of the item, such as the authors or actors.
     * @param  ?string  $itemClassification  Classification type that is associated with the Amazon catalog item.
     * @param  ?string  $itemName  The name that is associated with the Amazon catalog item.
     * @param  ?string  $manufacturer  The name of the manufacturer that is associated with the Amazon catalog item.
     * @param  ?bool  $memorabilia  When true, the item is classified as memorabilia.
     * @param  ?string  $modelNumber  The model number that is associated with the Amazon catalog item.
     * @param  ?int  $packageQuantity  The quantity of the Amazon catalog item within one package.
     * @param  ?string  $partNumber  The part number that is associated with the Amazon catalog item.
     * @param  ?\DateTimeInterface  $releaseDate  The earliest date on which the Amazon catalog item can be shipped to customers.
     * @param  ?string  $size  The name of the size of the Amazon catalog item.
     * @param  ?string  $style  The name of the style that is associated with the Amazon catalog item.
     * @param  ?bool  $tradeInEligible  When true, the Amazon catalog item is eligible for trade-in.
     * @param  ?string  $websiteDisplayGroup  The identifier of the website display group that is associated with the Amazon catalog item.
     * @param  ?string  $websiteDisplayGroupName  The display name of the website display group that is associated with the Amazon catalog item.
     */
    public function __construct(
        public string $marketplaceId,
        public ?bool $adultProduct = null,
        public ?bool $autographed = null,
        public ?string $brand = null,
        public ?ItemBrowseClassification $browseClassification = null,
        public ?string $color = null,
        public ?array $contributors = null,
        public ?string $itemClassification = null,
        public ?string $itemName = null,
        public ?string $manufacturer = null,
        public ?bool $memorabilia = null,
        public ?string $modelNumber = null,
        public ?int $packageQuantity = null,
        public ?string $partNumber = null,
        public ?\DateTimeInterface $releaseDate = null,
        public ?string $size = null,
        public ?string $style = null,
        public ?bool $tradeInEligible = null,
        public ?string $websiteDisplayGroup = null,
        public ?string $websiteDisplayGroupName = null,
    ) {}
}
