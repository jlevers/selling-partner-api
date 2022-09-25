## PackedItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_sequence_number** | **int** | Item Sequence Number for the item. This must be the same value as sent in the order for a given item. |
**buyer_product_identifier** | **string** | Buyer's Standard Identification Number (ASIN) of an item. Either buyerProductIdentifier or vendorProductIdentifier is required. | [optional]
**piece_number** | **int** | The piece number of the item in this container. This is required when the item is split across different containers. | [optional]
**vendor_product_identifier** | **string** | The vendor selected product identification of the item. Should be the same as was sent in the Purchase Order, like SKU Number. | [optional]
**packed_quantity** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentShippingV20211228\ItemQuantity**](ItemQuantity.md) |  |

[[VendorDirectFulfillmentShippingV20211228 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
