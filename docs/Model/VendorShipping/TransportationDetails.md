## TransportationDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**carrier_scac** | **string** | Code that identifies the carrier for the shipment. The Standard Carrier Alpha Code (SCAC) is a unique two to four letter code used to identify a carrier. Carrier SCAC codes are assigned and maintained by the NMFTA (National Motor Freight Association). This field is mandatory for US, CA, MX shipment confirmations. | [optional]
**carrier_shipment_reference_number** | **string** | The field also known as PRO number is a unique number assigned by the carrier. It is used to identify and track the shipment that goes out for delivery. This field is mandatory for UA, CA, MX shipment confirmations. | [optional]
**transportation_mode** | **string** | The mode of transportation for this shipment. | [optional]
**bill_of_lading_number** | **string** | Bill Of Lading (BOL) number is the unique number assigned by the vendor. The BOL present in the Shipment Confirmation message ideally matches the paper BOL provided with the shipment, but that is no must. Instead of BOL, an alternative reference number (like Delivery Note Number) for the shipment can also be sent in this field. | [optional]

[[VendorShipping Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
