## PackedItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_sequence_number** | **int** | Item Sequence Number for the item. This must be the same value as sent in the order for a given item. |
**buyer_product_identifier** | **string** | Buyer&#39;s Standard Identification Number (ASIN) of an item. Either buyerProductIdentifier or vendorProductIdentifier is required. | [optional]
**vendor_product_identifier** | **string** | The vendor selected product identification of the item. Should be the same as was sent in the Purchase Order, like SKU Number. | [optional]
**packed_quantity** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentShipping\ItemQuantity**](ItemQuantity.md) |  |

[[VendorDirectFulfillmentShipping Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
