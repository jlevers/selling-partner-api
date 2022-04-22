## Container

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**container_type** | **string** | The type of container. |
**container_identifier** | **string** | The container identifier. |
**tracking_number** | **string** | The tracking number. | [optional]
**manifest_id** | **string** | The manifest identifier. | [optional]
**manifest_date** | **string** | The date of the manifest. | [optional]
**ship_method** | **string** | The shipment method. | [optional]
**scac_code** | **string** | SCAC code required for NA VOC vendors only. | [optional]
**carrier** | **string** | Carrier required for EU VOC vendors only. | [optional]
**container_sequence_number** | **int** | An integer that must be submitted for multi-box shipments only, where one item may come in separate packages. | [optional]
**dimensions** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1\Dimensions**](Dimensions.md) |  | [optional]
**weight** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1\Weight**](Weight.md) |  | [optional]
**packed_items** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentShippingV1\PackedItem[]**](PackedItem.md) | A list of packed items. |

[[VendorDirectFulfillmentShippingV1 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
