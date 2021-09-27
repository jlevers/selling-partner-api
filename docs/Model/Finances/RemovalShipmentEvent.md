## RemovalShipmentEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**posted_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**merchant_order_id** | **string** | The merchant removal orderId. | [optional]
**order_id** | **string** | The identifier for the removal shipment order. | [optional]
**transaction_type** | **string** | The type of removal order.

Possible values:

* WHOLESALE_LIQUIDATION | [optional]
**removal_shipment_item_list** | [**\SellingPartnerApi\Model\Finances\RemovalShipmentItem[]**](RemovalShipmentItem.md) | A list of information about removal shipment items. | [optional]

[[Finances Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
