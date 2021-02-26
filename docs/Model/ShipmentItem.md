# # ShipmentItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seller_sku** | **string** | The seller SKU of the item. The seller SKU is qualified by the seller&#39;s seller ID, which is included with every call to the Selling Partner API. | [optional]
**order_item_id** | **string** | An Amazon-defined order item identifier. | [optional]
**order_adjustment_item_id** | **string** | An Amazon-defined order adjustment identifier defined for refunds, guarantee claims, and chargeback events. | [optional]
**quantity_shipped** | **int** | The number of items shipped. | [optional]
**item_charge_list** | [**\Evers\SellingPartnerApi\Model\ChargeComponent[]**](ChargeComponent.md) | A list of charge information on the seller&#39;s account. | [optional]
**item_charge_adjustment_list** | [**\Evers\SellingPartnerApi\Model\ChargeComponent[]**](ChargeComponent.md) | A list of charge information on the seller&#39;s account. | [optional]
**item_fee_list** | [**\Evers\SellingPartnerApi\Model\FeeComponent[]**](FeeComponent.md) | A list of fee component information. | [optional]
**item_fee_adjustment_list** | [**\Evers\SellingPartnerApi\Model\FeeComponent[]**](FeeComponent.md) | A list of fee component information. | [optional]
**item_tax_withheld_list** | [**\Evers\SellingPartnerApi\Model\TaxWithheldComponent[]**](TaxWithheldComponent.md) | A list of information about taxes withheld. | [optional]
**promotion_list** | [**\Evers\SellingPartnerApi\Model\Promotion[]**](Promotion.md) | A list of promotions. | [optional]
**promotion_adjustment_list** | [**\Evers\SellingPartnerApi\Model\Promotion[]**](Promotion.md) | A list of promotions. | [optional]
**cost_of_points_granted** | [**\Evers\SellingPartnerApi\Model\Currency**](Currency.md) |  | [optional]
**cost_of_points_returned** | [**\Evers\SellingPartnerApi\Model\Currency**](Currency.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
