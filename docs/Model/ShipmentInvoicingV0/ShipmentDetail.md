## ShipmentDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**warehouse_id** | **string** | The Amazon-defined identifier for the warehouse. | [optional]
**amazon_order_id** | **string** | The Amazon-defined identifier for the order. | [optional]
**amazon_shipment_id** | **string** | The Amazon-defined identifier for the shipment. | [optional]
**purchase_date** | **string** | The date and time when the order was created, in ISO 8601 format. | [optional]
**shipping_address** | [**\SellingPartnerApi\Model\ShipmentInvoicingV0\Address**](Address.md) |  | [optional]
**payment_method_details** | **string[]** | The list of payment method details. | [optional]
**marketplace_id** | **string** | The identifier for the marketplace where the order was placed. | [optional]
**seller_id** | **string** | The seller identifier. | [optional]
**buyer_name** | **string** | The name of the buyer. | [optional]
**buyer_county** | **string** | The county of the buyer. | [optional]
**buyer_tax_info** | [**\SellingPartnerApi\Model\ShipmentInvoicingV0\BuyerTaxInfo**](BuyerTaxInfo.md) |  | [optional]
**marketplace_tax_info** | [**\SellingPartnerApi\Model\ShipmentInvoicingV0\MarketplaceTaxInfo**](MarketplaceTaxInfo.md) |  | [optional]
**seller_display_name** | **string** | The seller's friendly name registered in the marketplace. | [optional]
**shipment_items** | [**\SellingPartnerApi\Model\ShipmentInvoicingV0\ShipmentItem[]**](ShipmentItem.md) | A list of shipment items. | [optional]

[[ShipmentInvoicingV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
