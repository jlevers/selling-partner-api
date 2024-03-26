<?php

namespace SellingPartnerApi\Seller\ListingsItemsV20210801\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemSummaryByMarketplace extends BaseDto
{
    /**
     * @param  string  $marketplaceId  A marketplace identifier. Identifies the Amazon marketplace for the listings item.
     * @param  string  $asin  Amazon Standard Identification Number (ASIN) of the listings item.
     * @param  string  $productType  The Amazon product type of the listings item.
     * @param  string[]  $status  Statuses that apply to the listings item.
     * @param  string  $itemName  Name, or title, associated with an Amazon catalog item.
     * @param  DateTime  $createdDate  Date the listings item was created, in ISO 8601 format.
     * @param  DateTime  $lastUpdatedDate  Date the listings item was last updated, in ISO 8601 format.
     * @param  ?string  $conditionType  Identifies the condition of the listings item.
     * @param  ?string  $fnSku  Fulfillment network stock keeping unit is an identifier used by Amazon fulfillment centers to identify each unique item.
     * @param  ?ItemImage  $mainImage  Image for the listings item.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly string $asin,
        public readonly string $productType,
        public readonly array $status,
        public readonly string $itemName,
        public readonly \DateTime $createdDate,
        public readonly \DateTime $lastUpdatedDate,
        public readonly ?string $conditionType = null,
        public readonly ?string $fnSku = null,
        public readonly ?ItemImage $mainImage = null,
    ) {
    }
}
