# # CouponPaymentEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**posted_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**coupon_id** | **string** | A coupon identifier. | [optional]
**seller_coupon_description** | **string** | The description provided by the seller when they created the coupon. | [optional]
**clip_or_redemption_count** | **int** | The number of coupon clips or redemptions. | [optional]
**payment_event_id** | **string** | A payment event identifier. | [optional]
**fee_component** | [**\Evers\SellingPartnerApi\Model\Finances\FeeComponent**](FeeComponent.md) |  | [optional]
**charge_component** | [**\Evers\SellingPartnerApi\Model\Finances\ChargeComponent**](ChargeComponent.md) |  | [optional]
**total_amount** | [**\Evers\SellingPartnerApi\Model\Finances\Currency**](Currency.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
