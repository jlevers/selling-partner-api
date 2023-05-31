## PayWithAmazonEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seller_order_id** | **string** | An order identifier that is specified by the seller. | [optional]
**transaction_posted_date** | **string** | A date string in ISO 8601 format. | [optional]
**business_object_type** | **string** | The type of business object. | [optional]
**sales_channel** | **string** | The sales channel for the transaction. | [optional]
**charge** | [**\SellingPartnerApi\Model\FinancesV0\ChargeComponent**](ChargeComponent.md) |  | [optional]
**fee_list** | [**\SellingPartnerApi\Model\FinancesV0\FeeComponent[]**](FeeComponent.md) | A list of fee component information. | [optional]
**payment_amount_type** | **string** | The type of payment.<br><br>Possible values:<br><br>* Sales | [optional]
**amount_description** | **string** | A short description of this payment event. | [optional]
**fulfillment_channel** | **string** | The fulfillment channel.<br><br>Possible values:<br><br>* AFN - Amazon Fulfillment Network (Fulfillment by Amazon)<br><br>* MFN - Merchant Fulfillment Network (self-fulfilled) | [optional]
**store_name** | **string** | The store name where the event occurred. | [optional]

[[FinancesV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
