## PackageDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**package_reference_id** | **string** | A seller-supplied identifier that uniquely identifies a package within the scope of an order. Only positive numeric values are supported. |
**carrier_code** | **string** | Identifies the carrier that will deliver the package. This field is required for all marketplaces, see [reference](https://developer-docs.amazon.com/sp-api/changelog/carriercode-value-required-in-shipment-confirmations-for-br-mx-ca-sg-au-in-jp-marketplaces). |
**carrier_name** | **string** | Carrier Name that will deliver the package. Required when carrierCode is \"Others\" | [optional]
**shipping_method** | **string** | Ship method to be used for shipping the order. | [optional]
**tracking_number** | **string** | The tracking number used to obtain tracking and delivery information. |
**ship_date** | **string** | The shipping date for the package. Must be in ISO-8601 date/time format. |
**ship_from_supply_source_id** | **string** | The unique identifier of the supply source. | [optional]
**order_items** | [**\SellingPartnerApi\Model\OrdersV0\ConfirmShipmentOrderItem[]**](ConfirmShipmentOrderItem.md) | A list of order items. |

[[OrdersV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
