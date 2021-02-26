# # ContentDocument

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The A+ Content document name. |
**content_type** | [**\Evers\SellingPartnerApi\Model\ContentType**](ContentType.md) |  |
**content_sub_type** | **string** | The A+ Content document subtype. This represents a special-purpose type of an A+ Content document. Not every A+ Content document type will have a subtype, and subtypes may change at any time. | [optional]
**locale** | **string** | The IETF language tag. This only supports the primary language subtag with one secondary language subtag. The secondary language subtag is almost always a regional designation. This does not support additional subtags beyond the primary and secondary subtags. **Pattern:** ^[a-z]{2,}-[A-Z0-9]{2,}$ |
**content_module_list** | [**\Evers\SellingPartnerApi\Model\ContentModule[]**](ContentModule.md) | A list of A+ Content modules. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
