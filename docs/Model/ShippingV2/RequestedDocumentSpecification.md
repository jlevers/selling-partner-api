## RequestedDocumentSpecification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**format** | [**\SellingPartnerApi\Model\ShippingV2\DocumentFormat**](DocumentFormat.md) |  |
**size** | [**\SellingPartnerApi\Model\ShippingV2\DocumentSize**](DocumentSize.md) |  |
**dpi** | **int** | The dots per inch (DPI) value used in printing. This value represents a measure of the resolution of the document. | [optional]
**page_layout** | **string** | Indicates the position of the label on the paper. Should be the same value as returned in getRates response. | [optional]
**need_file_joining** | **bool** | When true, files should be stitched together. Otherwise, files should be returned separately. Defaults to false. |
**requested_document_types** | [**\SellingPartnerApi\Model\ShippingV2\DocumentType[]**](DocumentType.md) | A list of the document types requested. |

[[ShippingV2 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
