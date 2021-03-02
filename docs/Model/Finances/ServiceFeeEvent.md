## ServiceFeeEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amazon_order_id** | **string** | An Amazon-defined identifier for an order. | [optional]
**fee_reason** | **string** | A short description of the service fee reason. | [optional]
**fee_list** | [**\SellingPartnerApi\Model\Finances\FeeComponent[]**](FeeComponent.md) | A list of fee component information. | [optional]
**seller_sku** | **string** | The seller SKU of the item. The seller SKU is qualified by the seller&#39;s seller ID, which is included with every call to the Selling Partner API. | [optional]
**fn_sku** | **string** | A unique identifier assigned by Amazon to products stored in and fulfilled from an Amazon fulfillment center. | [optional]
**fee_description** | **string** | A short description of the service fee event. | [optional]
**asin** | **string** | The Amazon Standard Identification Number (ASIN) of the item. | [optional]

[[Finances Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
