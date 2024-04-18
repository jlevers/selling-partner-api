## GetRatesRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ship_to** | [**\SellingPartnerApi\Model\ShippingV2\Address**](Address.md) |  | [optional]
**ship_from** | [**\SellingPartnerApi\Model\ShippingV2\Address**](Address.md) |  |
**return_to** | [**\SellingPartnerApi\Model\ShippingV2\Address**](Address.md) |  | [optional]
**ship_date** | **string** | The ship date and time (the requested pickup). This defaults to the current date and time. | [optional]
**packages** | [**\SellingPartnerApi\Model\ShippingV2\Package[]**](Package.md) | A list of packages to be shipped through a shipping service offering. |
**value_added_services** | [**\SellingPartnerApi\Model\ShippingV2\ValueAddedServiceDetails**](ValueAddedServiceDetails.md) |  | [optional]
**tax_details** | [**\SellingPartnerApi\Model\ShippingV2\TaxDetail[]**](TaxDetail.md) | A list of tax detail information. | [optional]
**channel_details** | [**\SellingPartnerApi\Model\ShippingV2\ChannelDetails**](ChannelDetails.md) |  |

[[ShippingV2 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
