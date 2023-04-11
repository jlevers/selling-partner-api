## CompetitivePriceType

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**competitive_price_id** | **string** | The pricing model for each price that is returned.<br><br>Possible values:<br><br>* 1 - New Buy Box Price.<br>* 2 - Used Buy Box Price. |
**price** | [**\SellingPartnerApi\Model\ProductPricingV0\PriceType**](PriceType.md) |  |
**condition** | **string** | Indicates the condition of the item whose pricing information is returned. Possible values are: New, Used, Collectible, Refurbished, or Club. | [optional]
**subcondition** | **string** | Indicates the subcondition of the item whose pricing information is returned. Possible values are: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty, Refurbished, Open Box, or Other. | [optional]
**offer_type** | [**\SellingPartnerApi\Model\ProductPricingV0\OfferCustomerType**](OfferCustomerType.md) |  | [optional]
**quantity_tier** | **int** | Indicates at what quantity this price becomes active. | [optional]
**quantity_discount_type** | [**\SellingPartnerApi\Model\ProductPricingV0\QuantityDiscountType**](QuantityDiscountType.md) |  | [optional]
**seller_id** | **string** | The seller identifier for the offer. | [optional]
**belongs_to_requester** | **bool** | Indicates whether or not the pricing information is for an offer listing that belongs to the requester. The requester is the seller associated with the SellerId that was submitted with the request. Possible values are: true and false. | [optional]

[[ProductPricingV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
