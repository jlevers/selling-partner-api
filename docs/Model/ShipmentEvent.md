# ShipmentEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amazon_order_id** | **string** | An Amazon-defined identifier for an order. | [optional] 
**seller_order_id** | **string** | A seller-defined identifier for an order. | [optional] 
**marketplace_name** | **string** | The name of the marketplace where the event occurred. | [optional] 
**order_charge_list** | [**\Evers\SellingPartnerApi\Model\ChargeComponentList**](ChargeComponentList.md) | A list of order-level charges. These charges are applicable to Multi-Channel Fulfillment COD orders. | [optional] 
**order_charge_adjustment_list** | [**\Evers\SellingPartnerApi\Model\ChargeComponentList**](ChargeComponentList.md) | A list of order-level charge adjustments. These adjustments are applicable to Multi-Channel Fulfillment COD orders. | [optional] 
**shipment_fee_list** | [**\Evers\SellingPartnerApi\Model\FeeComponentList**](FeeComponentList.md) | A list of shipment-level fees. | [optional] 
**shipment_fee_adjustment_list** | [**\Evers\SellingPartnerApi\Model\FeeComponentList**](FeeComponentList.md) | A list of shipment-level fee adjustments. | [optional] 
**order_fee_list** | [**\Evers\SellingPartnerApi\Model\FeeComponentList**](FeeComponentList.md) | A list of order-level fees. These charges are applicable to Multi-Channel Fulfillment orders. | [optional] 
**order_fee_adjustment_list** | [**\Evers\SellingPartnerApi\Model\FeeComponentList**](FeeComponentList.md) | A list of order-level fee adjustments. These adjustments are applicable to Multi-Channel Fulfillment orders. | [optional] 
**direct_payment_list** | [**\Evers\SellingPartnerApi\Model\DirectPaymentList**](DirectPaymentList.md) | A list of transactions where buyers pay Amazon through one of the credit cards offered by Amazon or where buyers pay a seller directly through COD. | [optional] 
**posted_date** | [**\Evers\SellingPartnerApi\Model\\DateTime**](\DateTime.md) | The date and time when the financial event was posted. | [optional] 
**shipment_item_list** | [**\Evers\SellingPartnerApi\Model\ShipmentItemList**](ShipmentItemList.md) |  | [optional] 
**shipment_item_adjustment_list** | [**\Evers\SellingPartnerApi\Model\ShipmentItemList**](ShipmentItemList.md) | A list of shipment item adjustments. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


