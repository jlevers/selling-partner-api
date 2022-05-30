## Item

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asin** | **string** | Amazon Standard Identification Number (ASIN) is the unique identifier for an item in the Amazon catalog. |
**attributes** | **object** | A JSON object that contains structured item attribute data keyed by attribute name. Catalog item attributes conform to the related product type definitions available in the Selling Partner API for Product Type Definitions. | [optional]
**dimensions** | [**\SellingPartnerApi\Model\CatalogItemsV20220401\ItemDimensionsByMarketplace[]**](ItemDimensionsByMarketplace.md) | Array of dimensions associated with the item in the Amazon catalog by Amazon marketplace. | [optional]
**identifiers** | [**\SellingPartnerApi\Model\CatalogItemsV20220401\ItemIdentifiersByMarketplace[]**](ItemIdentifiersByMarketplace.md) | Identifiers associated with the item in the Amazon catalog, such as UPC and EAN identifiers. | [optional]
**images** | [**\SellingPartnerApi\Model\CatalogItemsV20220401\ItemImagesByMarketplace[]**](ItemImagesByMarketplace.md) | Images for an item in the Amazon catalog. | [optional]
**product_types** | [**\SellingPartnerApi\Model\CatalogItemsV20220401\ItemProductTypeByMarketplace[]**](ItemProductTypeByMarketplace.md) | Product types associated with the Amazon catalog item. | [optional]
**relationships** | [**\SellingPartnerApi\Model\CatalogItemsV20220401\ItemRelationshipsByMarketplace[]**](ItemRelationshipsByMarketplace.md) | Relationships by marketplace for an Amazon catalog item (for example, variations). | [optional]
**sales_ranks** | [**\SellingPartnerApi\Model\CatalogItemsV20220401\ItemSalesRanksByMarketplace[]**](ItemSalesRanksByMarketplace.md) | Sales ranks of an Amazon catalog item. | [optional]
**summaries** | [**\SellingPartnerApi\Model\CatalogItemsV20220401\ItemSummaryByMarketplace[]**](ItemSummaryByMarketplace.md) | Summary details of an Amazon catalog item. | [optional]
**vendor_details** | [**\SellingPartnerApi\Model\CatalogItemsV20220401\ItemVendorDetailsByMarketplace[]**](ItemVendorDetailsByMarketplace.md) | Vendor details associated with an Amazon catalog item. Vendor details are available to vendors only. | [optional]

[[CatalogItemsV20220401 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
