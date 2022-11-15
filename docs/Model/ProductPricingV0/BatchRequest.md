## BatchRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uri** | **string** | The resource path of the operation you are calling in batch without any query parameters.

If you are calling `getItemOffersBatch`, supply the path of `getItemOffers`.

**Example:** `/products/pricing/v0/items/B000P6Q7MY/offers`

If you are calling `getListingOffersBatch`, supply the path of `getListingOffers`.

**Example:** `/products/pricing/v0/listings/B000P6Q7MY/offers` |
**method** | [**\SellingPartnerApi\Model\ProductPricingV0\HttpMethod**](HttpMethod.md) |  |
**headers** | **map[string,string]** | A mapping of additional HTTP headers to send/receive for the individual batch request. | [optional]

[[ProductPricingV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
