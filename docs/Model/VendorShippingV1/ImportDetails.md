## ImportDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**method_of_payment** | **string** | This is used for import purchase orders only. If the recipient requests, this field will contain the shipment method of payment. | [optional]
**seal_number** | **string** | The container's seal number. | [optional]
**route** | [**\SellingPartnerApi\Model\VendorShippingV1\Route**](Route.md) |  | [optional]
**import_containers** | **string** | Types and numbers of container(s) for import purchase orders. Can be a comma-separated list if shipment has multiple containers. | [optional]
**billable_weight** | [**\SellingPartnerApi\Model\VendorShippingV1\Weight**](Weight.md) |  | [optional]
**estimated_ship_by_date** | **string** | Date on which the shipment is expected to be shipped. This value should not be in the past and not more than 60 days out in the future. | [optional]
**handling_instructions** | **string** | Identification of the instructions on how specified item/carton/pallet should be handled. | [optional]

[[VendorShippingV1 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
