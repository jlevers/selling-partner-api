## ImportDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**method_of_payment** | **string** | If the recipient requests, contains the shipment method of payment. This is for import PO's only. | [optional]
**international_commercial_terms** | **string** | Incoterms (International Commercial Terms) are used to divide transaction costs and responsibilities between buyer and seller and reflect state-of-the-art transportation practices. This is for import purchase orders only. | [optional]
**port_of_delivery** | **string** | The port where goods on an import purchase order must be delivered by the vendor. This should only be specified when the internationalCommercialTerms is FOB. | [optional]
**import_containers** | **string** | Types and numbers of container(s) for import purchase orders. Can be a comma-separated list if the shipment has multiple containers. HC signifies a high-capacity container. Free-text field, limited to 64 characters. The format will be a comma-delimited list containing values of the type: $NUMBER_OF_CONTAINERS_OF_THIS_TYPE-$CONTAINER_TYPE. The list of values for the container type is: 40'(40-foot container), 40'HC (40-foot high-capacity container), 45', 45'HC, 30', 30'HC, 20', 20'HC. | [optional]
**shipping_instructions** | **string** | Special instructions regarding the shipment. This field is for import purchase orders. | [optional]

[[VendorOrdersV1 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
