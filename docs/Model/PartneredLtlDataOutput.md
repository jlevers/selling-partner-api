# # PartneredLtlDataOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contact** | [**\Evers\SellingPartnerApi\Model\Contact**](Contact.md) |  |
**box_count** | **int** |  |
**seller_freight_class** | [**\Evers\SellingPartnerApi\Model\SellerFreightClass**](SellerFreightClass.md) |  | [optional]
**freight_ready_date** | [**\DateTime**](\DateTime.md) |  |
**pallet_list** | [**\Evers\SellingPartnerApi\Model\Pallet[]**](Pallet.md) | A list of pallet information. |
**total_weight** | [**\Evers\SellingPartnerApi\Model\Weight**](Weight.md) |  |
**seller_declared_value** | [**\Evers\SellingPartnerApi\Model\Amount**](Amount.md) |  | [optional]
**amazon_calculated_value** | [**\Evers\SellingPartnerApi\Model\Amount**](Amount.md) |  | [optional]
**preview_pickup_date** | [**\DateTime**](\DateTime.md) |  |
**preview_delivery_date** | [**\DateTime**](\DateTime.md) |  |
**preview_freight_class** | [**\Evers\SellingPartnerApi\Model\SellerFreightClass**](SellerFreightClass.md) |  |
**amazon_reference_id** | **string** | A unique identifier created by Amazon that identifies this Amazon-partnered, Less Than Truckload/Full Truckload (LTL/FTL) shipment. |
**is_bill_of_lading_available** | **bool** | Indicates whether the bill of lading for the shipment is available. |
**partnered_estimate** | [**\Evers\SellingPartnerApi\Model\PartneredEstimate**](PartneredEstimate.md) |  | [optional]
**carrier_name** | **string** | The carrier for the inbound shipment. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
