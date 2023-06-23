## ListOffersResponseOffer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku** | **string** | The SKU. This property is only supported for sellers and not for vendors. | [optional]
**asin** | **string** | The Amazon Standard Identification Number (ASIN). | [optional]
**marketplace_id** | **string** | The marketplace identifier. The supported marketplaces for both sellers and vendors are US, CA, ES, UK, FR, IT, IN, DE and JP. The supported marketplaces for vendors only are BR, AU, MX, AE and NL. Refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids) to find the identifier for the marketplace. | [optional]
**eligibility** | [**\SellingPartnerApi\Model\ReplenishmentV20221107\EligibilityStatus**](EligibilityStatus.md) |  | [optional]
**offer_program_configuration** | [**\SellingPartnerApi\Model\ReplenishmentV20221107\OfferProgramConfiguration**](OfferProgramConfiguration.md) |  | [optional]
**program_type** | [**\SellingPartnerApi\Model\ReplenishmentV20221107\ProgramType**](ProgramType.md) |  | [optional]
**vendor_codes** | **string[]** | A list of vendor codes associated with the offer. | [optional]

[[ReplenishmentV20221107 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
