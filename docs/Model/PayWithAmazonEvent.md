# PayWithAmazonEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seller_order_id** | **string** | An order identifier that is specified by the seller. | [optional] 
**transaction_posted_date** | [**\Evers\SellingPartnerApi\Model\\DateTime**](\DateTime.md) | The date and time when the payment transaction is posted. In ISO 8601 date time format. | [optional] 
**business_object_type** | **string** | The type of business object. | [optional] 
**sales_channel** | **string** | The sales channel for the transaction. | [optional] 
**charge** | [**\Evers\SellingPartnerApi\Model\ChargeComponent**](ChargeComponent.md) | The charge associated with the event. | [optional] 
**fee_list** | [**\Evers\SellingPartnerApi\Model\FeeComponentList**](FeeComponentList.md) | A list of fees associated with the event. | [optional] 
**payment_amount_type** | **string** | The type of payment.  Possible values:  * Sales | [optional] 
**amount_description** | **string** | A short description of this payment event. | [optional] 
**fulfillment_channel** | **string** | The fulfillment channel.  Possible values:  * AFN - Amazon Fulfillment Network (Fulfillment by Amazon)  * MFN - Merchant Fulfillment Network (self-fulfilled) | [optional] 
**store_name** | **string** | The store name where the event occurred. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


