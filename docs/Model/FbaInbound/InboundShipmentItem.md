## InboundShipmentItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_id** | **string** | A shipment identifier originally returned by the createInboundShipmentPlan operation. | [optional]
**seller_sku** | **string** | The seller SKU of the item. |
**fulfillment_network_sku** | **string** | Amazon&#39;s fulfillment network SKU of the item. | [optional]
**quantity_shipped** | **int** | The item quantity. |
**quantity_received** | **int** | The item quantity. | [optional]
**quantity_in_case** | **int** | The item quantity. | [optional]
**release_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**prep_details_list** | [**\SellingPartnerApi\Model\FbaInbound\PrepDetails[]**](PrepDetails.md) | A list of preparation instructions and who is responsible for that preparation. | [optional]

[[FbaInbound Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
