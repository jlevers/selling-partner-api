# # RemovalShipmentItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**removal_shipment_item_id** | **string** | An identifier for an item in a removal shipment. | [optional]
**tax_collection_model** | **string** | The tax collection model applied to the item.  Possible values:  * MarketplaceFacilitator - Tax is withheld and remitted to the taxing authority by Amazon on behalf of the seller.  * Standard - Tax is paid to the seller and not remitted to the taxing authority by Amazon. | [optional]
**fulfillment_network_sku** | **string** | The Amazon fulfillment network SKU for the item. | [optional]
**quantity** | **int** | The quantity of the item. | [optional]
**revenue** | [**\Evers\SellingPartnerApi\Model\Finances\Currency**](Currency.md) |  | [optional]
**fee_amount** | [**\Evers\SellingPartnerApi\Model\Finances\Currency**](Currency.md) |  | [optional]
**tax_amount** | [**\Evers\SellingPartnerApi\Model\Finances\Currency**](Currency.md) |  | [optional]
**tax_withheld** | [**\Evers\SellingPartnerApi\Model\Finances\Currency**](Currency.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
