## RetrochargeEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**retrocharge_event_type** | **string** | The type of event.<br><br>Possible values:<br><br>* Retrocharge<br><br>* RetrochargeReversal | [optional]
**amazon_order_id** | **string** | An Amazon-defined identifier for an order. | [optional]
**posted_date** | **string** | A date string in ISO 8601 format. | [optional]
**base_tax** | [**\SellingPartnerApi\Model\FinancesV0\Currency**](Currency.md) |  | [optional]
**shipping_tax** | [**\SellingPartnerApi\Model\FinancesV0\Currency**](Currency.md) |  | [optional]
**marketplace_name** | **string** | The name of the marketplace where the retrocharge event occurred. | [optional]
**retrocharge_tax_withheld_list** | [**\SellingPartnerApi\Model\FinancesV0\TaxWithheldComponent[]**](TaxWithheldComponent.md) | A list of information about taxes withheld. | [optional]

[[FinancesV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
