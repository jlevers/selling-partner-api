## PartneredLtlDataOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contact** | [**\SellingPartnerApi\Model\FbaInboundV0\Contact**](Contact.md) |  |
**box_count** | **int** |  |
**seller_freight_class** | **string** | The freight class of the shipment. For information about determining the freight class, contact the carrier. | [optional]
**freight_ready_date** | **string** | A date string in ISO 8601 format. |
**pallet_list** | [**\SellingPartnerApi\Model\FbaInboundV0\Pallet[]**](Pallet.md) | A list of pallet information. |
**total_weight** | [**\SellingPartnerApi\Model\FbaInboundV0\Weight**](Weight.md) |  |
**seller_declared_value** | [**\SellingPartnerApi\Model\FbaInboundV0\Amount**](Amount.md) |  | [optional]
**amazon_calculated_value** | [**\SellingPartnerApi\Model\FbaInboundV0\Amount**](Amount.md) |  | [optional]
**preview_pickup_date** | **string** | A date string in ISO 8601 format. |
**preview_delivery_date** | **string** | A date string in ISO 8601 format. |
**preview_freight_class** | **string** | The freight class of the shipment. For information about determining the freight class, contact the carrier. |
**amazon_reference_id** | **string** | A unique identifier created by Amazon that identifies this Amazon-partnered, Less Than Truckload/Full Truckload (LTL/FTL) shipment. |
**is_bill_of_lading_available** | **bool** | Indicates whether the bill of lading for the shipment is available. |
**partnered_estimate** | [**\SellingPartnerApi\Model\FbaInboundV0\PartneredEstimate**](PartneredEstimate.md) |  | [optional]
**carrier_name** | **string** | The carrier for the inbound shipment. |

[[FbaInboundV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
