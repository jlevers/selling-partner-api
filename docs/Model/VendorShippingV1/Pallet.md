## Pallet

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pallet_identifiers** | [**\SellingPartnerApi\Model\VendorShippingV1\ContainerIdentification[]**](ContainerIdentification.md) | A list of pallet identifiers. |
**tier** | **int** | Number of layers per pallet. Only applicable to container type Pallet. | [optional]
**block** | **int** | Number of cartons per layer on the pallet. Only applicable to container type Pallet. | [optional]
**dimensions** | [**\SellingPartnerApi\Model\VendorShippingV1\Dimensions**](Dimensions.md) |  | [optional]
**weight** | [**\SellingPartnerApi\Model\VendorShippingV1\Weight**](Weight.md) |  | [optional]
**carton_reference_details** | [**\SellingPartnerApi\Model\VendorShippingV1\CartonReferenceDetails**](CartonReferenceDetails.md) |  | [optional]
**items** | [**\SellingPartnerApi\Model\VendorShippingV1\ContainerItem[]**](ContainerItem.md) | A list of container item details. | [optional]

[[VendorShippingV1 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
