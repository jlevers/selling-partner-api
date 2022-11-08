## OrderItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_sequence_number** | **string** | Numbering of the item on the purchase order. The first item will be 1, the second 2, and so on. |
**buyer_product_identifier** | **string** | Buyer's standard identification number (ASIN) of an item. | [optional]
**vendor_product_identifier** | **string** | The vendor selected product identification of the item. | [optional]
**title** | **string** | Title for the item. | [optional]
**ordered_quantity** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\ItemQuantity**](ItemQuantity.md) |  |
**scheduled_delivery_shipment** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\ScheduledDeliveryShipment**](ScheduledDeliveryShipment.md) |  | [optional]
**gift_details** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\GiftDetails**](GiftDetails.md) |  | [optional]
**net_price** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\Money**](Money.md) |  |
**tax_details** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\OrderItemTaxDetails**](OrderItemTaxDetails.md) |  | [optional]
**total_price** | [**\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV1\Money**](Money.md) |  | [optional]

[[VendorDirectFulfillmentOrdersV1 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
