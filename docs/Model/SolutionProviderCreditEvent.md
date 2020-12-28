# SolutionProviderCreditEvent

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
**transaction_amount** | [**\Evers\SellingPartnerApi\Model\Currency**](Currency.md) | The amount of the credit. | [optional] 
**transaction_creation_date** | [**\Evers\SellingPartnerApi\Model\\DateTime**](\DateTime.md) | The date and time that the credit transaction was created, in ISO 8601 date time format. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


