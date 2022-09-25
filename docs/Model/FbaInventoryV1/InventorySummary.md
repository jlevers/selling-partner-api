## InventorySummary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asin** | **string** | The Amazon Standard Identification Number (ASIN) of an item. | [optional]
**fn_sku** | **string** | Amazon's fulfillment network SKU identifier. | [optional]
**seller_sku** | **string** | The seller SKU of the item. | [optional]
**condition** | **string** | The condition of the item as described by the seller (for example, New Item). | [optional]
**inventory_details** | [**\SellingPartnerApi\Model\FbaInventoryV1\InventoryDetails**](InventoryDetails.md) |  | [optional]
**last_updated_time** | **string** | The date and time that any quantity was last updated in ISO8601 format. | [optional]
**product_name** | **string** | The localized language product title of the item within the specific marketplace. | [optional]
**total_quantity** | **int** | The total number of units in an inbound shipment or in Amazon fulfillment centers. | [optional]

[[FbaInventoryV1 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
