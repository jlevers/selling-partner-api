## PayWithAmazonEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seller_order_id** | **string** | An order identifier that is specified by the seller. | [optional]
**transaction_posted_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**business_object_type** | **string** | The type of business object. | [optional]
**sales_channel** | **string** | The sales channel for the transaction. | [optional]
**charge** | [**\SellingPartnerApi\Model\Finances\ChargeComponent**](ChargeComponent.md) |  | [optional]
**fee_list** | [**\SellingPartnerApi\Model\Finances\FeeComponent[]**](FeeComponent.md) | A list of fee component information. | [optional]
**payment_amount_type** | **string** | The type of payment.

Possible values:

* Sales | [optional]
**amount_description** | **string** | A short description of this payment event. | [optional]
**fulfillment_channel** | **string** | The fulfillment channel.

Possible values:

* AFN - Amazon Fulfillment Network (Fulfillment by Amazon)

* MFN - Merchant Fulfillment Network (self-fulfilled) | [optional]
**store_name** | **string** | The store name where the event occurred. | [optional]

[[Finances Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
