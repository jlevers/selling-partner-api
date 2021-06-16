## ShipmentConfirmation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchase_order_number** | **string** | Purchase order number corresponding to the shipment. |
**shipment_details** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentShipping\ShipmentDetails**](ShipmentDetails.md) |  |
**selling_party** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentShipping\PartyIdentification**](PartyIdentification.md) |  |
**ship_from_party** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentShipping\PartyIdentification**](PartyIdentification.md) |  |
**items** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentShipping\Item[]**](Item.md) | Provide the details of the items in this shipment. If any of the item details field is common at a package or a pallet level, then provide them at the corresponding package. |
**containers** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentShipping\Container[]**](Container.md) | Provide the details of the items in this shipment. If any of the item details field is common at a package or a pallet level, then provide them at the corresponding package. | [optional]

[[VendorDirectFulfillmentShipping Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
