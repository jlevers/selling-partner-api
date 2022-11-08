## ShipmentEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amazon_order_id** | **string** | An Amazon-defined identifier for an order. | [optional]
**seller_order_id** | **string** | A seller-defined identifier for an order. | [optional]
**marketplace_name** | **string** | The name of the marketplace where the event occurred. | [optional]
**order_charge_list** | [**\SellingPartnerApi\Model\FinancesV0\ChargeComponent[]**](ChargeComponent.md) | A list of charge information on the seller's account. | [optional]
**order_charge_adjustment_list** | [**\SellingPartnerApi\Model\FinancesV0\ChargeComponent[]**](ChargeComponent.md) | A list of charge information on the seller's account. | [optional]
**shipment_fee_list** | [**\SellingPartnerApi\Model\FinancesV0\FeeComponent[]**](FeeComponent.md) | A list of fee component information. | [optional]
**shipment_fee_adjustment_list** | [**\SellingPartnerApi\Model\FinancesV0\FeeComponent[]**](FeeComponent.md) | A list of fee component information. | [optional]
**order_fee_list** | [**\SellingPartnerApi\Model\FinancesV0\FeeComponent[]**](FeeComponent.md) | A list of fee component information. | [optional]
**order_fee_adjustment_list** | [**\SellingPartnerApi\Model\FinancesV0\FeeComponent[]**](FeeComponent.md) | A list of fee component information. | [optional]
**direct_payment_list** | [**\SellingPartnerApi\Model\FinancesV0\DirectPayment[]**](DirectPayment.md) | A list of direct payment information. | [optional]
**posted_date** | **string** | A date string in ISO 8601 format. | [optional]
**shipment_item_list** | [**\SellingPartnerApi\Model\FinancesV0\ShipmentItem[]**](ShipmentItem.md) | A list of shipment items. | [optional]
**shipment_item_adjustment_list** | [**\SellingPartnerApi\Model\FinancesV0\ShipmentItem[]**](ShipmentItem.md) | A list of shipment items. | [optional]

[[FinancesV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
