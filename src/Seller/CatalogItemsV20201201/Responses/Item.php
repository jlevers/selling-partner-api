<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20201201\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\CatalogItemsV20201201\Dto\ItemIdentifiersByMarketplace;
use SellingPartnerApi\Seller\CatalogItemsV20201201\Dto\ItemImagesByMarketplace;
use SellingPartnerApi\Seller\CatalogItemsV20201201\Dto\ItemProductTypeByMarketplace;
use SellingPartnerApi\Seller\CatalogItemsV20201201\Dto\ItemSalesRanksByMarketplace;
use SellingPartnerApi\Seller\CatalogItemsV20201201\Dto\ItemSummaryByMarketplace;
use SellingPartnerApi\Seller\CatalogItemsV20201201\Dto\ItemVariationsByMarketplace;
use SellingPartnerApi\Seller\CatalogItemsV20201201\Dto\ItemVendorDetailsByMarketplace;

final class Item extends BaseResponse
{
    protected static array $complexArrayTypes = [
        'identifiers' => [ItemIdentifiersByMarketplace::class],
        'images' => [ItemImagesByMarketplace::class],
        'productTypes' => [ItemProductTypeByMarketplace::class],
        'salesRanks' => [ItemSalesRanksByMarketplace::class],
        'summaries' => [ItemSummaryByMarketplace::class],
        'variations' => [ItemVariationsByMarketplace::class],
        'vendorDetails' => [ItemVendorDetailsByMarketplace::class],
    ];

    /**
     * @param  string  $asin  Amazon Standard Identification Number (ASIN) is the unique identifier for an item in the Amazon catalog.
     * @param  ?mixed[]  $attributes  A JSON object that contains structured item attribute data keyed by attribute name. Catalog item attributes are available only to brand owners and conform to the related product type definitions available in the Selling Partner API for Product Type Definitions.
     * @param  ItemIdentifiersByMarketplace[]|null  $identifiers  Identifiers associated with the item in the Amazon catalog, such as UPC and EAN identifiers.
     * @param  ItemImagesByMarketplace[]|null  $images  Images for an item in the Amazon catalog. All image variants are provided to brand owners. Otherwise, a thumbnail of the "MAIN" image variant is provided.
     * @param  ItemProductTypeByMarketplace[]|null  $productTypes  Product types associated with the Amazon catalog item.
     * @param  ItemSalesRanksByMarketplace[]|null  $salesRanks  Sales ranks of an Amazon catalog item.
     * @param  ItemSummaryByMarketplace[]|null  $summaries  Summary details of an Amazon catalog item.
     * @param  ItemVariationsByMarketplace[]|null  $variations  Variation details by marketplace for an Amazon catalog item (variation relationships).
     * @param  ItemVendorDetailsByMarketplace[]|null  $vendorDetails  Vendor details associated with an Amazon catalog item. Vendor details are available to vendors only.
     */
    public function __construct(
        public readonly string $asin,
        public readonly ?array $attributes = null,
        public readonly ?array $identifiers = null,
        public readonly ?array $images = null,
        public readonly ?array $productTypes = null,
        public readonly ?array $salesRanks = null,
        public readonly ?array $summaries = null,
        public readonly ?array $variations = null,
        public readonly ?array $vendorDetails = null,
    ) {
    }
}
