## SolutionProviderCreditEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**provider_transaction_type** | **string** | The transaction type. | [optional]
**seller_order_id** | **string** | A seller-defined identifier for an order. | [optional]
**marketplace_id** | **string** | The identifier of the marketplace where the order was placed. | [optional]
**marketplace_country_code** | **string** | The two-letter country code of the country associated with the marketplace where the order was placed. | [optional]
**seller_id** | **string** | The Amazon-defined identifier of the seller. | [optional]
**seller_store_name** | **string** | The store name where the payment event occurred. | [optional]
**provider_id** | **string** | The Amazon-defined identifier of the solution provider. | [optional]
**provider_store_name** | **string** | The store name where the payment event occurred. | [optional]
**transaction_amount** | [**\SellingPartnerApi\Model\Finances\Currency**](Currency.md) |  | [optional]
**transaction_creation_date** | [**\DateTime**](\DateTime.md) |  | [optional]

[[Finances Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
