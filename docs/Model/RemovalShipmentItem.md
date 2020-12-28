# RemovalShipmentItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**removal_shipment_item_id** | **string** | An identifier for an item in a removal shipment. | [optional] 
**tax_collection_model** | **string** | The tax collection model applied to the item.  Possible values:  * MarketplaceFacilitator - Tax is withheld and remitted to the taxing authority by Amazon on behalf of the seller.  * Standard - Tax is paid to the seller and not remitted to the taxing authority by Amazon. | [optional] 
**fulfillment_network_sku** | **string** | The Amazon fulfillment network SKU for the item. | [optional] 
**quantity** | **int** | The quantity of the item. | [optional] 
**revenue** | [**\Evers\SellingPartnerApi\Model\Currency**](Currency.md) | The total amount paid to the seller for the removed item. | [optional] 
**fee_amount** | [**\Evers\SellingPartnerApi\Model\Currency**](Currency.md) | The fee that Amazon charged to the seller for the removal of the item. The amount is a negative number. | [optional] 
**tax_amount** | [**\Evers\SellingPartnerApi\Model\Currency**](Currency.md) | Tax collected on the revenue. | [optional] 
**tax_withheld** | [**\Evers\SellingPartnerApi\Model\Currency**](Currency.md) | The tax withheld and remitted to the taxing authority by Amazon on behalf of the seller. If TaxCollectionModel&#x3D;MarketplaceFacilitator, then TaxWithheld&#x3D;TaxAmount (except the TaxWithheld amount is a negative number). Otherwise TaxWithheld&#x3D;0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


