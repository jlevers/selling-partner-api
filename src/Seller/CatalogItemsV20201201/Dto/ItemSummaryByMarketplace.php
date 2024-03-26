<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20201201\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemSummaryByMarketplace extends BaseDto
{
    /**
     * @param  string  $marketplaceId  Amazon marketplace identifier.
     * @param  ?string  $brandName  Name of the brand associated with an Amazon catalog item.
     * @param  ?string  $browseNode  Identifier of the browse node associated with an Amazon catalog item.
     * @param  ?string  $colorName  Name of the color associated with an Amazon catalog item.
     * @param  ?string  $itemName  Name, or title, associated with an Amazon catalog item.
     * @param  ?string  $manufacturer  Name of the manufacturer associated with an Amazon catalog item.
     * @param  ?string  $modelNumber  Model number associated with an Amazon catalog item.
     * @param  ?string  $sizeName  Name of the size associated with an Amazon catalog item.
     * @param  ?string  $styleName  Name of the style associated with an Amazon catalog item.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly ?string $brandName = null,
        public readonly ?string $browseNode = null,
        public readonly ?string $colorName = null,
        public readonly ?string $itemName = null,
        public readonly ?string $manufacturer = null,
        public readonly ?string $modelNumber = null,
        public readonly ?string $sizeName = null,
        public readonly ?string $styleName = null,
    ) {
    }
}
