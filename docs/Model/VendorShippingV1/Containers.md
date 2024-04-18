## Containers

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**container_type** | **string** | The type of container. |
**container_sequence_number** | **string** | An integer that must be submitted for multi-box shipments only, where one item may come in separate packages. | [optional]
**container_identifiers** | [**\SellingPartnerApi\Model\VendorShippingV1\ContainerIdentification[]**](ContainerIdentification.md) | A list of carton identifiers. |
**tracking_number** | **string** | The tracking number used for identifying the shipment. | [optional]
**dimensions** | [**\SellingPartnerApi\Model\VendorShippingV1\Dimensions**](Dimensions.md) |  | [optional]
**weight** | [**\SellingPartnerApi\Model\VendorShippingV1\Weight**](Weight.md) |  | [optional]
**tier** | **int** | Number of layers per pallet. | [optional]
**block** | **int** | Number of cartons per layer on the pallet. | [optional]
**inner_containers_details** | [**\SellingPartnerApi\Model\VendorShippingV1\InnerContainersDetails**](InnerContainersDetails.md) |  | [optional]
**packed_items** | [**\SellingPartnerApi\Model\VendorShippingV1\PackedItems[]**](PackedItems.md) | A list of packed items. | [optional]

[[VendorShippingV1 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
