<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20220401\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class Item extends BaseResponse
{
    /**
     * @param  string  $asin Amazon Standard Identification Number (ASIN) is the unique identifier for an item in the Amazon catalog.
     * @param  array  $attributes A JSON object that contains structured item attribute data keyed by attribute name. Catalog item attributes conform to the related product type definitions available in the Selling Partner API for Product Type Definitions.
     * @param  ItemDimensionsByMarketplace[]  $dimensions Array of dimensions associated with the item in the Amazon catalog by Amazon marketplace.
     * @param  ItemIdentifiersByMarketplace[]  $identifiers Identifiers associated with the item in the Amazon catalog, such as UPC and EAN identifiers.
     * @param  ItemImagesByMarketplace[]  $images Images for an item in the Amazon catalog.
     * @param  ItemProductTypeByMarketplace[]  $productTypes Product types associated with the Amazon catalog item.
     * @param  ItemRelationshipsByMarketplace[]  $relationships Relationships by marketplace for an Amazon catalog item (for example, variations).
     * @param  ItemSalesRanksByMarketplace[]  $salesRanks Sales ranks of an Amazon catalog item.
     * @param  ItemSummaryByMarketplace[]  $summaries Summary details of an Amazon catalog item.
     * @param  ItemVendorDetailsByMarketplace[]  $vendorDetails Vendor details associated with an Amazon catalog item. Vendor details are available to vendors only.
     */
    public function __construct(
        public readonly ?string $asin = null,
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
