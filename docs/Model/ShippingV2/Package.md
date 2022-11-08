## Package

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dimensions** | [**\SellingPartnerApi\Model\ShippingV2\Dimensions**](Dimensions.md) |  |
**weight** | [**\SellingPartnerApi\Model\ShippingV2\Weight**](Weight.md) |  |
**insured_value** | [**\SellingPartnerApi\Model\ShippingV2\Currency**](Currency.md) |  |
**is_hazmat** | **bool** | When true, the package contains hazardous materials. Defaults to false. | [optional]
**seller_display_name** | **string** | The seller name displayed on the label. | [optional]
**charges** | [**\SellingPartnerApi\Model\ShippingV2\ChargeComponent[]**](ChargeComponent.md) | A list of charges based on the shipping service charges applied on a package. | [optional]
**package_client_reference_id** | **string** | A client provided unique identifier for a package being shipped. This value should be saved by the client to pass as a parameter to the getShipmentDocuments operation. |
**items** | [**\SellingPartnerApi\Model\ShippingV2\Item[]**](Item.md) | A list of items. |

[[ShippingV2 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
