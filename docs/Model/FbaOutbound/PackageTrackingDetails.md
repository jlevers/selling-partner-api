# # PackageTrackingDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**package_number** | **int** | The package identifier. |
**tracking_number** | **string** | The tracking number for the package. | [optional]
**customer_tracking_link** | **string** | Link on swiship.com that allows customers to track the package. | [optional]
**carrier_code** | **string** | The name of the carrier. | [optional]
**carrier_phone_number** | **string** | The phone number of the carrier. | [optional]
**carrier_url** | **string** | The URL of the carrier’s website. | [optional]
**ship_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**estimated_arrival_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**ship_to_address** | [**\Evers\SellingPartnerApi\Model\FbaOutbound\TrackingAddress**](TrackingAddress.md) |  | [optional]
**current_status** | [**\Evers\SellingPartnerApi\Model\FbaOutbound\CurrentStatus**](CurrentStatus.md) |  | [optional]
**current_status_description** | **string** | Description corresponding to the CurrentStatus value. | [optional]
**signed_for_by** | **string** | The name of the person who signed for the package. | [optional]
**additional_location_info** | [**\Evers\SellingPartnerApi\Model\FbaOutbound\AdditionalLocationInfo**](AdditionalLocationInfo.md) |  | [optional]
**tracking_events** | [**\Evers\SellingPartnerApi\Model\FbaOutbound\TrackingEvent[]**](TrackingEvent.md) | An array of tracking event information. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
