## OrderMetricsInterval

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**interval** | **string** | The interval of time based on requested granularity (ex. Hour, Day, etc.) If this is the first or the last interval from the list, it might contain incomplete data if the requested interval doesn't align with the requested granularity (ex. request interval 2018-09-01T02:00:00Z--2018-09-04T19:00:00Z and granularity day will result in Sept 1st UTC day and Sept 4th UTC days having partial data). |
**unit_count** | **int** | The number of units in orders based on the specified filters. |
**order_item_count** | **int** | The number of order items based on the specified filters. |
**order_count** | **int** | The number of orders based on the specified filters. |
**average_unit_price** | [**\SellingPartnerApi\Model\SalesV1\Money**](Money.md) |  |
**total_sales** | [**\SellingPartnerApi\Model\SalesV1\Money**](Money.md) |  |

[[SalesV1 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
