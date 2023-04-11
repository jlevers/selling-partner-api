## RemovalShipmentAdjustmentEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**posted_date** | **string** | A date string in ISO 8601 format. | [optional]
**adjustment_event_id** | **string** | The unique identifier for the adjustment event. | [optional]
**merchant_order_id** | **string** | The merchant removal orderId. | [optional]
**order_id** | **string** | The orderId for shipping inventory. | [optional]
**transaction_type** | **string** | The type of removal order.<br><br>Possible values:<br><br>* WHOLESALE_LIQUIDATION. | [optional]
**removal_shipment_item_adjustment_list** | [**\SellingPartnerApi\Model\FinancesV0\RemovalShipmentItemAdjustment[]**](RemovalShipmentItemAdjustment.md) | A comma-delimited list of Removal shipmentItemAdjustment details for FBA inventory. | [optional]

[[FinancesV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
