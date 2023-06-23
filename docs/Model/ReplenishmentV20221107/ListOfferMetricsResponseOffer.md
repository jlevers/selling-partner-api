## ListOfferMetricsResponseOffer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asin** | **string** | The Amazon Standard Identification Number (ASIN). | [optional]
**not_delivered_due_to_oos** | **double** | The percentage of items that were not shipped out of the total shipped units over a period of time due to being out of stock. Applicable only for the PERFORMANCE timePeriodType. | [optional]
**total_subscriptions_revenue** | **double** | The revenue generated from subscriptions over a period of time. Applicable only for the PERFORMANCE timePeriodType. | [optional]
**shipped_subscription_units** | **float** | The number of units shipped to the subscribers over a period of time. Applicable only for the PERFORMANCE timePeriodType. | [optional]
**active_subscriptions** | **float** | The number of active subscriptions present at the end of the period. Applicable only for the PERFORMANCE timePeriodType. | [optional]
**revenue_penetration** | **double** | The percentage of total program revenue out of total product revenue. Applicable only for the PERFORMANCE timePeriodType. | [optional]
**next30_day_total_subscriptions_revenue** | **double** | The forecasted total subscription revenue for the next 30 days. Applicable only for the FORECAST timePeriodType. | [optional]
**next60_day_total_subscriptions_revenue** | **double** | The forecasted total subscription revenue for the next 60 days. Applicable only for the FORECAST timePeriodType. | [optional]
**next90_day_total_subscriptions_revenue** | **double** | The forecasted total subscription revenue for the next 90 days. Applicable only for the FORECAST timePeriodType. | [optional]
**next30_day_shipped_subscription_units** | **float** | The forecasted shipped subscription units for the next 30 days. Applicable only for the FORECAST timePeriodType. | [optional]
**next60_day_shipped_subscription_units** | **float** | The forecasted shipped subscription units for the next 60 days. Applicable only for the FORECAST timePeriodType. | [optional]
**next90_day_shipped_subscription_units** | **float** | The forecasted shipped subscription units for the next 90 days. Applicable only for the FORECAST timePeriodType. | [optional]
**time_interval** | [**\SellingPartnerApi\Model\ReplenishmentV20221107\TimeInterval**](TimeInterval.md) |  | [optional]
**currency_code** | **string** | The currency code in ISO 4217 format. | [optional]

[[ReplenishmentV20221107 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
