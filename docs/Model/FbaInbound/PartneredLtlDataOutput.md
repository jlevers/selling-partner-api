## PartneredLtlDataOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contact** | [**\SellingPartnerApi\Model\FbaInbound\Contact**](Contact.md) |  |
**box_count** | **int** |  |
**seller_freight_class** | **string** | The freight class of the shipment. For information about determining the freight class, contact the carrier. | [optional]
**freight_ready_date** | [**\DateTime**](\DateTime.md) |  |
**pallet_list** | [**\SellingPartnerApi\Model\FbaInbound\Pallet[]**](Pallet.md) | A list of pallet information. |
**total_weight** | [**\SellingPartnerApi\Model\FbaInbound\Weight**](Weight.md) |  |
**seller_declared_value** | [**\SellingPartnerApi\Model\FbaInbound\Amount**](Amount.md) |  | [optional]
**amazon_calculated_value** | [**\SellingPartnerApi\Model\FbaInbound\Amount**](Amount.md) |  | [optional]
**preview_pickup_date** | [**\DateTime**](\DateTime.md) |  |
**preview_delivery_date** | [**\DateTime**](\DateTime.md) |  |
**preview_freight_class** | **string** | The freight class of the shipment. For information about determining the freight class, contact the carrier. |
**amazon_reference_id** | **string** | A unique identifier created by Amazon that identifies this Amazon-partnered, Less Than Truckload/Full Truckload (LTL/FTL) shipment. |
**is_bill_of_lading_available** | **bool** | Indicates whether the bill of lading for the shipment is available. |
**partnered_estimate** | [**\SellingPartnerApi\Model\FbaInbound\PartneredEstimate**](PartneredEstimate.md) |  | [optional]
**carrier_name** | **string** | The carrier for the inbound shipment. |

[[FbaInbound Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
