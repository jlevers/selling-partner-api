## NetworkComminglingTransactionEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_type** | **string** | The type of network item swap.<br><br>Possible values:<br><br>* NetCo - A Fulfillment by Amazon inventory pooling transaction. Available only in the India marketplace.<br><br>* ComminglingVAT - A commingling VAT transaction. Available only in the UK, Spain, France, Germany, and Italy marketplaces. | [optional]
**posted_date** | **string** | A date string in ISO 8601 format. | [optional]
**net_co_transaction_id** | **string** | The identifier for the network item swap. | [optional]
**swap_reason** | **string** | The reason for the network item swap. | [optional]
**asin** | **string** | The Amazon Standard Identification Number (ASIN) of the swapped item. | [optional]
**marketplace_id** | **string** | The marketplace in which the event took place. | [optional]
**tax_exclusive_amount** | [**\SellingPartnerApi\Model\FinancesV0\Currency**](Currency.md) |  | [optional]
**tax_amount** | [**\SellingPartnerApi\Model\FinancesV0\Currency**](Currency.md) |  | [optional]

[[FinancesV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
