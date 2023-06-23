## Order

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amazon_order_id** | **string** | An Amazon-defined order identifier, in 3-7-7 format. |
**seller_order_id** | **string** | A seller-defined order identifier. | [optional]
**purchase_date** | **string** | The date when the order was created. |
**last_update_date** | **string** | The date when the order was last updated.<br><br>__Note__: LastUpdateDate is returned with an incorrect date for orders that were last updated before 2009-04-01. |
**order_status** | **string** | The current order status. |
**fulfillment_channel** | **string** | Whether the order was fulfilled by Amazon (AFN) or by the seller (MFN). | [optional]
**sales_channel** | **string** | The sales channel of the first item in the order. | [optional]
**order_channel** | **string** | The order channel of the first item in the order. | [optional]
**ship_service_level** | **string** | The shipment service level of the order. | [optional]
**order_total** | [**\SellingPartnerApi\Model\OrdersV0\Money**](Money.md) |  | [optional]
**number_of_items_shipped** | **int** | The number of items shipped. | [optional]
**number_of_items_unshipped** | **int** | The number of items unshipped. | [optional]
**payment_execution_detail** | [**\SellingPartnerApi\Model\OrdersV0\PaymentExecutionDetailItem[]**](PaymentExecutionDetailItem.md) | A list of payment execution detail items. | [optional]
**payment_method** | **string** | The payment method for the order. This property is limited to Cash On Delivery (COD) and Convenience Store (CVS) payment methods. Unless you need the specific COD payment information provided by the PaymentExecutionDetailItem object, we recommend using the PaymentMethodDetails property to get payment method information. | [optional]
**payment_method_details** | **string[]** | A list of payment method detail items. | [optional]
**marketplace_id** | **string** | The identifier for the marketplace where the order was placed. | [optional]
**shipment_service_level_category** | **string** | The shipment service level category of the order.<br><br>Possible values: Expedited, FreeEconomy, NextDay, SameDay, SecondDay, Scheduled, Standard. | [optional]
**easy_ship_shipment_status** | [**\SellingPartnerApi\Model\OrdersV0\EasyShipShipmentStatus**](EasyShipShipmentStatus.md) |  | [optional]
**cba_displayable_shipping_label** | **string** | Custom ship label for Checkout by Amazon (CBA). | [optional]
**order_type** | **string** | The type of the order. | [optional]
**earliest_ship_date** | **string** | The start of the time period within which you have committed to ship the order. In ISO 8601 date time format. Returned only for seller-fulfilled orders.<br><br>__Note__: EarliestShipDate might not be returned for orders placed before February 1, 2013. | [optional]
**latest_ship_date** | **string** | The end of the time period within which you have committed to ship the order. In ISO 8601 date time format. Returned only for seller-fulfilled orders.<br><br>__Note__: LatestShipDate might not be returned for orders placed before February 1, 2013. | [optional]
**earliest_delivery_date** | **string** | The start of the time period within which you have committed to fulfill the order. In ISO 8601 date time format. Returned only for seller-fulfilled orders. | [optional]
**latest_delivery_date** | **string** | The end of the time period within which you have committed to fulfill the order. In ISO 8601 date time format. Returned only for seller-fulfilled orders that do not have a PendingAvailability, Pending, or Canceled status. | [optional]
**is_business_order** | **bool** | When true, the order is an Amazon Business order. An Amazon Business order is an order where the buyer is a Verified Business Buyer. | [optional]
**is_prime** | **bool** | When true, the order is a seller-fulfilled Amazon Prime order. | [optional]
**is_premium_order** | **bool** | When true, the order has a Premium Shipping Service Level Agreement. For more information about Premium Shipping orders, see \"Premium Shipping Options\" in the Seller Central Help for your marketplace. | [optional]
**is_global_express_enabled** | **bool** | When true, the order is a GlobalExpress order. | [optional]
**replaced_order_id** | **string** | The order ID value for the order that is being replaced. Returned only if IsReplacementOrder = true. | [optional]
**is_replacement_order** | **bool** | When true, this is a replacement order. | [optional]
**promise_response_due_date** | **string** | Indicates the date by which the seller must respond to the buyer with an estimated ship date. Returned only for Sourcing on Demand orders. | [optional]
**is_estimated_ship_date_set** | **bool** | When true, the estimated ship date is set for the order. Returned only for Sourcing on Demand orders. | [optional]
**is_sold_by_ab** | **bool** | When true, the item within this order was bought and re-sold by Amazon Business EU SARL (ABEU). By buying and instantly re-selling your items, ABEU becomes the seller of record, making your inventory available for sale to customers who would not otherwise purchase from a third-party seller. | [optional]
**is_iba** | **bool** | When true, the item within this order was bought and re-sold by Amazon Business EU SARL (ABEU). By buying and instantly re-selling your items, ABEU becomes the seller of record, making your inventory available for sale to customers who would not otherwise purchase from a third-party seller. | [optional]
**default_ship_from_location_address** | [**\SellingPartnerApi\Model\OrdersV0\Address**](Address.md) |  | [optional]
**buyer_invoice_preference** | **string** | The buyer's invoicing preference. Available only in the TR marketplace. | [optional]
**buyer_tax_information** | [**\SellingPartnerApi\Model\OrdersV0\BuyerTaxInformation**](BuyerTaxInformation.md) |  | [optional]
**fulfillment_instruction** | [**\SellingPartnerApi\Model\OrdersV0\FulfillmentInstruction**](FulfillmentInstruction.md) |  | [optional]
**is_ispu** | **bool** | When true, this order is marked to be picked up from a store rather than delivered. | [optional]
**is_access_point_order** | **bool** | When true, this order is marked to be delivered to an Access Point. The access location is chosen by the customer. Access Points include Amazon Hub Lockers, Amazon Hub Counters, and pickup points operated by carriers. | [optional]
**marketplace_tax_info** | [**\SellingPartnerApi\Model\OrdersV0\MarketplaceTaxInfo**](MarketplaceTaxInfo.md) |  | [optional]
**seller_display_name** | **string** | The seller's friendly name registered in the marketplace. | [optional]
**shipping_address** | [**\SellingPartnerApi\Model\OrdersV0\Address**](Address.md) |  | [optional]
**buyer_info** | [**\SellingPartnerApi\Model\OrdersV0\BuyerInfo**](BuyerInfo.md) |  | [optional]
**automated_shipping_settings** | [**\SellingPartnerApi\Model\OrdersV0\AutomatedShippingSettings**](AutomatedShippingSettings.md) |  | [optional]
**has_regulated_items** | **bool** | Whether the order contains regulated items which may require additional approval steps before being fulfilled. | [optional]
**electronic_invoice_status** | [**\SellingPartnerApi\Model\OrdersV0\ElectronicInvoiceStatus**](ElectronicInvoiceStatus.md) |  | [optional]

[[OrdersV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
