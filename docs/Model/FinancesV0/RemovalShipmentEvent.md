## RemovalShipmentEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**posted_date** | **string** | A date string in ISO 8601 format. | [optional]
**merchant_order_id** | **string** | The merchant removal orderId. | [optional]
**order_id** | **string** | The identifier for the removal shipment order. | [optional]
**transaction_type** | **string** | The type of removal order.<br><br>Possible values:<br><br>* WHOLESALE_LIQUIDATION | [optional]
**removal_shipment_item_list** | [**\SellingPartnerApi\Model\FinancesV0\RemovalShipmentItem[]**](RemovalShipmentItem.md) | A list of information about removal shipment items. | [optional]

[[FinancesV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
