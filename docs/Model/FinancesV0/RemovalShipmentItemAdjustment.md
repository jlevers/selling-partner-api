## RemovalShipmentItemAdjustment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**removal_shipment_item_id** | **string** | An identifier for an item in a removal shipment. | [optional]
**tax_collection_model** | **string** | The tax collection model applied to the item.<br><br>Possible values:<br><br>* MarketplaceFacilitator - Tax is withheld and remitted to the taxing authority by Amazon on behalf of the seller.<br><br>* Standard - Tax is paid to the seller and not remitted to the taxing authority by Amazon. | [optional]
**fulfillment_network_sku** | **string** | The Amazon fulfillment network SKU for the item. | [optional]
**adjusted_quantity** | **int** | Adjusted quantity of removal shipmentItemAdjustment items. | [optional]
**revenue_adjustment** | [**\SellingPartnerApi\Model\FinancesV0\Currency**](Currency.md) |  | [optional]
**tax_amount_adjustment** | [**\SellingPartnerApi\Model\FinancesV0\Currency**](Currency.md) |  | [optional]
**tax_withheld_adjustment** | [**\SellingPartnerApi\Model\FinancesV0\Currency**](Currency.md) |  | [optional]

[[FinancesV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
