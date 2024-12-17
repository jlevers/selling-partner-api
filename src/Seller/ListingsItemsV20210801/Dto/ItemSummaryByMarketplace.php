<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ListingsItemsV20210801\Dto;

use SellingPartnerApi\Dto;

final class ItemSummaryByMarketplace extends Dto
{
    /**
     * @param  string  $marketplaceId  A marketplace identifier. Identifies the Amazon marketplace for the listings item.
     * @param  string  $asin  Amazon Standard Identification Number (ASIN) of the listings item.
     * @param  string  $productType  The Amazon product type of the listings item.
     * @param  string[]  $status  Statuses that apply to the listings item.
     * @param  string  $itemName  The name or title associated with an Amazon catalog item.
     * @param  \DateTimeInterface  $createdDate  The date the listings item was created in ISO 8601 format.
     * @param  \DateTimeInterface  $lastUpdatedDate  The date the listings item was last updated in ISO 8601 format.
     * @param  ?string  $conditionType  Identifies the condition of the listings item.
     * @param  ?string  $fnSku  The fulfillment network stock keeping unit is an identifier used by Amazon fulfillment centers to identify each unique item.
     * @param  ?ItemImage  $mainImage  The image for the listings item.
     */
    public function __construct(
        public string $marketplaceId,
        public string $asin,
        public string $productType,
        public array $status,
        public string $itemName,
        public \DateTimeInterface $createdDate,
        public \DateTimeInterface $lastUpdatedDate,
        public ?string $conditionType = null,
        public ?string $fnSku = null,
        public ?ItemImage $mainImage = null,
    ) {}
}
