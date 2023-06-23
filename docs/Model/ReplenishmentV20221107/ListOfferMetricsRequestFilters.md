## ListOfferMetricsRequestFilters

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**aggregation_frequency** | [**\SellingPartnerApi\Model\ReplenishmentV20221107\AggregationFrequency**](AggregationFrequency.md) |  | [optional]
**time_interval** | [**\SellingPartnerApi\Model\ReplenishmentV20221107\TimeInterval**](TimeInterval.md) |  |
**time_period_type** | [**\SellingPartnerApi\Model\ReplenishmentV20221107\TimePeriodType**](TimePeriodType.md) |  |
**marketplace_id** | **string** | The marketplace identifier. The supported marketplaces for both sellers and vendors are US, CA, ES, UK, FR, IT, IN, DE and JP. The supported marketplaces for vendors only are BR, AU, MX, AE and NL. Refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids) to find the identifier for the marketplace. |
**program_types** | [**\SellingPartnerApi\Model\ReplenishmentV20221107\ProgramType[]**](ProgramType.md) | A list of replenishment program types. |
**asins** | **string[]** | A list of Amazon Standard Identification Numbers (ASINs). | [optional]

[[ReplenishmentV20221107 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
