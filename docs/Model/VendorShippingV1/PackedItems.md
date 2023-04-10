## PackedItems

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_sequence_number** | **string** | Item sequence number for the item. The first item will be 001, the second 002, and so on. This number is used as a reference to refer to this item from the carton or pallet level. | [optional]
**buyer_product_identifier** | **string** | Buyer Standard Identification Number (ASIN) of an item. | [optional]
**vendor_product_identifier** | **string** | The vendor selected product identification of the item. Should be the same as was sent in the purchase order. | [optional]
**packed_quantity** | [**\SellingPartnerApi\Model\VendorShippingV1\ItemQuantity**](ItemQuantity.md) |  | [optional]
**item_details** | [**\SellingPartnerApi\Model\VendorShippingV1\PackageItemDetails**](PackageItemDetails.md) |  | [optional]

[[VendorShippingV1 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
