## ItemOffersRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uri** | **string** | The &#x60;getItemOffers&#x60; resource path without any query parameters.

**Example:** &#x60;/products/pricing/v0/items/B000P6Q7MY/offers&#x60; |
**method** | [**\SellingPartnerApi\Model\ProductPricingV0\HttpMethod**](HttpMethod.md) |  |
**headers** | **map[string,string]** | A mapping of additional HTTP headers to send/receive for the individual batch request. | [optional]
**marketplace_id** | **string** | A marketplace identifier. Specifies the marketplace for which prices are returned. |
**item_condition** | [**\SellingPartnerApi\Model\ProductPricingV0\ItemCondition**](ItemCondition.md) |  |
**customer_type** | [**\SellingPartnerApi\Model\ProductPricingV0\CustomerType**](CustomerType.md) |  | [optional]

[[ProductPricingV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
