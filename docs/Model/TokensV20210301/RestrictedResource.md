## RestrictedResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**method** | **string** | The HTTP method in the restricted resource. |
**path** | **string** | The path in the restricted resource. Here are some path examples:<br>- ```/orders/v0/orders```. For getting an RDT for the getOrders operation of the Orders API. For bulk orders.<br>- ```/orders/v0/orders/123-1234567-1234567```. For getting an RDT for the getOrder operation of the Orders API. For a specific order.<br>- ```/orders/v0/orders/123-1234567-1234567/orderItems```. For getting an RDT for the getOrderItems operation of the Orders API. For the order items in a specific order.<br>- ```/mfn/v0/shipments/FBA1234ABC5D```. For getting an RDT for the getShipment operation of the Shipping API. For a specific shipment.<br>- ```/mfn/v0/shipments/{shipmentId}```. For getting an RDT for the getShipment operation of the Shipping API. For any of a selling partner's shipments that you specify when you call the getShipment operation. |
**data_elements** | **string[]** | Indicates the type of Personally Identifiable Information requested. This parameter is required only when getting an RDT for use with the getOrder, getOrders, or getOrderItems operation of the Orders API. For more information, see the [Tokens API Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/tokens-api-use-case-guide). Possible values include:<br>- **buyerInfo**. On the order level this includes general identifying information about the buyer and tax-related information. On the order item level this includes gift wrap information and custom order information, if available.<br>- **shippingAddress**. This includes information for fulfilling orders.<br>- **buyerTaxInformation**. This includes information for issuing tax invoices. | [optional]

[[TokensV20210301 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
