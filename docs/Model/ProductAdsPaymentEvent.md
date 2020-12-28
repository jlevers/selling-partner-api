# ProductAdsPaymentEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**posted_date** | [**\Evers\SellingPartnerApi\Model\\DateTime**](\DateTime.md) | The date and time when the financial event was posted. | [optional] 
**transaction_type** | **string** | Indicates if the transaction is for a charge or a refund.  Possible values:  * charge - Charge  * refund - Refund | [optional] 
**invoice_id** | **string** | Identifier for the invoice that the transaction appears in. | [optional] 
**base_value** | [**\Evers\SellingPartnerApi\Model\Currency**](Currency.md) | Base amount of the transaction, before tax. | [optional] 
**tax_value** | [**\Evers\SellingPartnerApi\Model\Currency**](Currency.md) | Tax amount of the transaction. | [optional] 
**transaction_value** | [**\Evers\SellingPartnerApi\Model\Currency**](Currency.md) | The total amount of the transaction. Equal to baseValue + taxValue. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


