# ShipmentItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seller_sku** | **string** | The seller SKU of the item. The seller SKU is qualified by the seller&#39;s seller ID, which is included with every call to the Selling Partner API. | [optional] 
**order_item_id** | **string** | An Amazon-defined order item identifier. | [optional] 
**order_adjustment_item_id** | **string** | An Amazon-defined order adjustment identifier defined for refunds, guarantee claims, and chargeback events. | [optional] 
**quantity_shipped** | **int** | The number of items shipped. | [optional] 
**item_charge_list** | [**\Evers\SellingPartnerApi\Model\ChargeComponentList**](ChargeComponentList.md) | A list of charges associated with the shipment item. | [optional] 
**item_charge_adjustment_list** | [**\Evers\SellingPartnerApi\Model\ChargeComponentList**](ChargeComponentList.md) | A list of charge adjustments associated with the shipment item. This value is only returned for refunds, guarantee claims, and chargeback events. | [optional] 
**item_fee_list** | [**\Evers\SellingPartnerApi\Model\FeeComponentList**](FeeComponentList.md) | A list of fees associated with the shipment item. | [optional] 
**item_fee_adjustment_list** | [**\Evers\SellingPartnerApi\Model\FeeComponentList**](FeeComponentList.md) | A list of fee adjustments associated with the shipment item. This value is only returned for refunds, guarantee claims, and chargeback events. | [optional] 
**item_tax_withheld_list** | [**\Evers\SellingPartnerApi\Model\TaxWithheldComponentList**](TaxWithheldComponentList.md) | A list of taxes withheld information for a shipment item. | [optional] 
**promotion_list** | [**\Evers\SellingPartnerApi\Model\PromotionList**](PromotionList.md) |  | [optional] 
**promotion_adjustment_list** | [**\Evers\SellingPartnerApi\Model\PromotionList**](PromotionList.md) | A list of promotion adjustments associated with the shipment item. This value is only returned for refunds, guarantee claims, and chargeback events. | [optional] 
**cost_of_points_granted** | [**\Evers\SellingPartnerApi\Model\Currency**](Currency.md) | The cost of Amazon Points granted for a shipment item. | [optional] 
**cost_of_points_returned** | [**\Evers\SellingPartnerApi\Model\Currency**](Currency.md) | The cost of Amazon Points returned for a shipment item. This value is only returned for refunds, guarantee claims, and chargeback events. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


