## FeaturedOfferExpectedPriceRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uri** | **string** | The URI associated with an individual request within a batch. For FeaturedOfferExpectedPrice, this should be '/products/pricing/2022-05-01/offer/featuredOfferExpectedPrice'. |
**method** | [**\SellingPartnerApi\Model\ProductPricingV20220501\HttpMethod**](HttpMethod.md) |  |
**body** | **map[string,object]** | Additional HTTP body information associated with an individual request within a batch. | [optional]
**headers** | **map[string,string]** | A mapping of additional HTTP headers to send/receive for an individual request within a batch. | [optional]
**marketplace_id** | **string** | A marketplace identifier. Specifies the marketplace for which data is returned. |
**sku** | **string** | The seller SKU of the item. |

[[ProductPricingV20220501 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
