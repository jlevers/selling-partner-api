## Item

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_sequence_number** | **string** | Item sequence number for the item. The first item will be 001, the second 002, and so on. This number is used as a reference to refer to this item from the carton or pallet level. |
**amazon_product_identifier** | **string** | Buyer Standard Identification Number (ASIN) of an item. | [optional]
**vendor_product_identifier** | **string** | The vendor selected product identification of the item. Should be the same as was sent in the purchase order. | [optional]
**shipped_quantity** | [**\SellingPartnerApi\Model\VendorShippingV1\ItemQuantity**](ItemQuantity.md) |  |
**item_details** | [**\SellingPartnerApi\Model\VendorShippingV1\ItemDetails**](ItemDetails.md) |  | [optional]

[[VendorShippingV1 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
