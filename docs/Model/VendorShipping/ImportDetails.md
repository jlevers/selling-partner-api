## ImportDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**method_of_payment** | **string** | This is used for import purchase orders only. If the recipient requests, this field will contain the shipment method of payment. | [optional]
**seal_number** | **string** | The container&#39;s seal number. | [optional]
**route** | [**\SellingPartnerApi\Model\VendorShipping\Route**](Route.md) |  | [optional]
**import_containers** | **string** | Types and numbers of container(s) for import purchase orders. Can be a comma-separated list if shipment has multiple containers. | [optional]
**billable_weight** | [**\SellingPartnerApi\Model\VendorShipping\Weight**](Weight.md) |  | [optional]
**estimated_ship_by_date** | [**\DateTime**](\DateTime.md) | Date on which the shipment is expected to be shipped. This value should not be in the past and not more than 60 days out in the future. | [optional]

[[VendorShipping Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
