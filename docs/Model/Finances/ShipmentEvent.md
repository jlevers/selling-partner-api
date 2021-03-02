## ShipmentEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amazon_order_id** | **string** | An Amazon-defined identifier for an order. | [optional]
**seller_order_id** | **string** | A seller-defined identifier for an order. | [optional]
**marketplace_name** | **string** | The name of the marketplace where the event occurred. | [optional]
**order_charge_list** | [**\SellingPartnerApi\Model\Finances\ChargeComponent[]**](ChargeComponent.md) | A list of charge information on the seller&#39;s account. | [optional]
**order_charge_adjustment_list** | [**\SellingPartnerApi\Model\Finances\ChargeComponent[]**](ChargeComponent.md) | A list of charge information on the seller&#39;s account. | [optional]
**shipment_fee_list** | [**\SellingPartnerApi\Model\Finances\FeeComponent[]**](FeeComponent.md) | A list of fee component information. | [optional]
**shipment_fee_adjustment_list** | [**\SellingPartnerApi\Model\Finances\FeeComponent[]**](FeeComponent.md) | A list of fee component information. | [optional]
**order_fee_list** | [**\SellingPartnerApi\Model\Finances\FeeComponent[]**](FeeComponent.md) | A list of fee component information. | [optional]
**order_fee_adjustment_list** | [**\SellingPartnerApi\Model\Finances\FeeComponent[]**](FeeComponent.md) | A list of fee component information. | [optional]
**direct_payment_list** | [**\SellingPartnerApi\Model\Finances\DirectPayment[]**](DirectPayment.md) | A list of direct payment information. | [optional]
**posted_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**shipment_item_list** | [**\SellingPartnerApi\Model\Finances\ShipmentItem[]**](ShipmentItem.md) | A list of shipment items. | [optional]
**shipment_item_adjustment_list** | [**\SellingPartnerApi\Model\Finances\ShipmentItem[]**](ShipmentItem.md) | A list of shipment items. | [optional]

[[Finances Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
