## Item

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_value** | [**\SellingPartnerApi\Model\ShippingV2\Currency**](Currency.md) |  | [optional]
**description** | **string** | The product description of the item. | [optional]
**item_identifier** | **string** | A unique identifier for an item provided by the client. Should be the order item identifier for the item if this item is associated with an Amazon order. If the item is part of an external (non-Amazon) order, this field can be left blank. | [optional]
**quantity** | **int** | The number of units. This value is required. |
**weight** | [**\SellingPartnerApi\Model\ShippingV2\Weight**](Weight.md) |  |
**is_hazmat** | **bool** | When true, the item qualifies as hazardous materials (hazmat). Defaults to false. | [optional]
**product_type** | **string** | The product type of the item. | [optional]
**invoice_details** | [**\SellingPartnerApi\Model\ShippingV2\InvoiceDetails**](InvoiceDetails.md) |  | [optional]
**serial_numbers** | **string[]** | A list of unique serial numbers in an Amazon package that can be used to guarantee non-fraudulent items. The number of serial numbers in the list must be less than or equal to the quantity of items being shipped. Only applicable when channel source is Amazon. | [optional]
**direct_fulfillment_item_identifiers** | [**\SellingPartnerApi\Model\ShippingV2\DirectFulfillmentItemIdentifiers**](DirectFulfillmentItemIdentifiers.md) |  | [optional]

[[ShippingV2 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
