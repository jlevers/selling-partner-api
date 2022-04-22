## CouponPaymentEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**posted_date** | **string** | A date string in ISO 8601 format. | [optional]
**coupon_id** | **string** | A coupon identifier. | [optional]
**seller_coupon_description** | **string** | The description provided by the seller when they created the coupon. | [optional]
**clip_or_redemption_count** | **int** | The number of coupon clips or redemptions. | [optional]
**payment_event_id** | **string** | A payment event identifier. | [optional]
**fee_component** | [**\SellingPartnerApi\Model\FinancesV0\FeeComponent**](FeeComponent.md) |  | [optional]
**charge_component** | [**\SellingPartnerApi\Model\FinancesV0\ChargeComponent**](ChargeComponent.md) |  | [optional]
**total_amount** | [**\SellingPartnerApi\Model\FinancesV0\Currency**](Currency.md) |  | [optional]

[[FinancesV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
