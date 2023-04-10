## ShipmentInformation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vendor_details** | [**\SellingPartnerApi\Model\VendorShippingV1\VendorDetails**](VendorDetails.md) |  | [optional]
**buyer_reference_number** | **string** | Buyer Reference number which is a unique number. | [optional]
**ship_to_party** | [**\SellingPartnerApi\Model\VendorShippingV1\PartyIdentification**](PartyIdentification.md) |  | [optional]
**ship_from_party** | [**\SellingPartnerApi\Model\VendorShippingV1\PartyIdentification**](PartyIdentification.md) |  | [optional]
**warehouse_id** | **string** | Vendor Warehouse ID from where the shipment is scheduled to be picked up by buyer / Carrier. | [optional]
**master_tracking_id** | **string** | Unique Id with  which  the shipment can be tracked for Small Parcels. | [optional]
**total_label_count** | **int** | Number of Labels that are created as part of this shipment. | [optional]
**ship_mode** | **string** | Type of shipment whether it is Small Parcel | [optional]

[[VendorShippingV1 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
