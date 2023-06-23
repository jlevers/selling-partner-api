## GetSellingPartnerMetricsResponseMetric

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**not_delivered_due_to_oos** | **double** | The percentage of items that were not shipped out of the total shipped units over a period of time due to being out of stock. Applicable only for the PERFORMANCE timePeriodType. | [optional]
**total_subscriptions_revenue** | **double** | The revenue generated from subscriptions over a period of time. Applicable for both the PERFORMANCE and FORECAST timePeriodType. | [optional]
**shipped_subscription_units** | **float** | The number of units shipped to the subscribers over a period of time. Applicable for both the PERFORMANCE and FORECAST timePeriodType. | [optional]
**active_subscriptions** | **float** | The number of active subscriptions present at the end of the period. Applicable only for the PERFORMANCE timePeriodType. | [optional]
**subscriber_average_revenue** | **double** | The average revenue per subscriber of the program over a period of past 12 months for sellers and 6 months for vendors. Applicable only for the PERFORMANCE timePeriodType. | [optional]
**non_subscriber_average_revenue** | **double** | The average revenue per non-subscriber of the program over a period of past 12 months for sellers and 6 months for vendors. Applicable only for the PERFORMANCE timePeriodType. | [optional]
**time_interval** | [**\SellingPartnerApi\Model\ReplenishmentV20221107\TimeInterval**](TimeInterval.md) |  | [optional]
**currency_code** | **string** | The currency code in ISO 4217 format. | [optional]

[[ReplenishmentV20221107 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
