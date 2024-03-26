<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\CatalogItemsV20220401\Dto\ItemDimensionsByMarketplace;
use SellingPartnerApi\Seller\CatalogItemsV20220401\Dto\ItemIdentifiersByMarketplace;
use SellingPartnerApi\Seller\CatalogItemsV20220401\Dto\ItemImagesByMarketplace;
use SellingPartnerApi\Seller\CatalogItemsV20220401\Dto\ItemProductTypeByMarketplace;
use SellingPartnerApi\Seller\CatalogItemsV20220401\Dto\ItemRelationshipsByMarketplace;
use SellingPartnerApi\Seller\CatalogItemsV20220401\Dto\ItemSalesRanksByMarketplace;
use SellingPartnerApi\Seller\CatalogItemsV20220401\Dto\ItemSummaryByMarketplace;
use SellingPartnerApi\Seller\CatalogItemsV20220401\Dto\ItemVendorDetailsByMarketplace;

final class Item extends BaseResponse
{
    protected static array $complexArrayTypes = [
        'dimensions' => [ItemDimensionsByMarketplace::class],
        'identifiers' => [ItemIdentifiersByMarketplace::class],
        'images' => [ItemImagesByMarketplace::class],
        'productTypes' => [ItemProductTypeByMarketplace::class],
        'relationships' => [ItemRelationshipsByMarketplace::class],
        'salesRanks' => [ItemSalesRanksByMarketplace::class],
        'summaries' => [ItemSummaryByMarketplace::class],
        'vendorDetails' => [ItemVendorDetailsByMarketplace::class],
    ];

    /**
     * @param  string  $asin  Amazon Standard Identification Number (ASIN) is the unique identifier for an item in the Amazon catalog.
     * @param  ?mixed[]  $attributes  A JSON object that contains structured item attribute data keyed by attribute name. Catalog item attributes conform to the related product type definitions available in the Selling Partner API for Product Type Definitions.
     * @param  ItemDimensionsByMarketplace[]|null  $dimensions  Array of dimensions associated with the item in the Amazon catalog by Amazon marketplace.
     * @param  ItemIdentifiersByMarketplace[]|null  $identifiers  Identifiers associated with the item in the Amazon catalog, such as UPC and EAN identifiers.
     * @param  ItemImagesByMarketplace[]|null  $images  Images for an item in the Amazon catalog.
     * @param  ItemProductTypeByMarketplace[]|null  $productTypes  Product types associated with the Amazon catalog item.
     * @param  ItemRelationshipsByMarketplace[]|null  $relationships  Relationships by marketplace for an Amazon catalog item (for example, variations).
     * @param  ItemSalesRanksByMarketplace[]|null  $salesRanks  Sales ranks of an Amazon catalog item.
     * @param  ItemSummaryByMarketplace[]|null  $summaries  Summary details of an Amazon catalog item.
     * @param  ItemVendorDetailsByMarketplace[]|null  $vendorDetails  Vendor details associated with an Amazon catalog item. Vendor details are available to vendors only.
     */
    public function __construct(
        public readonly string $asin,
        public readonly ?array $attributes = null,
        public readonly ?array $dimensions = null,
        public readonly ?array $identifiers = null,
        public readonly ?array $images = null,
        public readonly ?array $productTypes = null,
        public readonly ?array $relationships = null,
        public readonly ?array $salesRanks = null,
        public readonly ?array $summaries = null,
        public readonly ?array $vendorDetails = null,
    ) {
    }
}
