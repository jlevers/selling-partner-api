# ConfirmPreorderResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**confirmed_need_by_date** | [**\Evers\SellingPartnerApi\Model\DateStringType**](DateStringType.md) | Date passed in with the NeedByDate parameter. The confirmed shipment must arrive at the Amazon fulfillment center by this date to avoid delivery promise breaks for pre-ordered items. In YYYY-MM-DD format. | [optional] 
**confirmed_fulfillable_date** | [**\Evers\SellingPartnerApi\Model\DateStringType**](DateStringType.md) | Date that determines which pre-order items in the shipment are eligible for pre-order. The pre-order Buy Box will appear for any pre-order item in the shipment with a release date on or after this date. In YYYY-MM-DD format. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


