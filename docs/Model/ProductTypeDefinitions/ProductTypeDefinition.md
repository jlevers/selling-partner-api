## ProductTypeDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta_schema** | [**\SellingPartnerApi\Model\ProductTypeDefinitions\SchemaLink**](SchemaLink.md) |  | [optional]
**schema** | [**\SellingPartnerApi\Model\ProductTypeDefinitions\SchemaLink**](SchemaLink.md) |  |
**requirements** | **string** | Name of the requirements set represented in this product type definition. |
**requirements_enforced** | **string** | Identifies if the required attributes for a requirements set are enforced by the product type definition schema. Non-enforced requirements enable structural validation of individual attributes without all of the required attributes being present (such as for partial updates). |
**property_groups** | [**map[string,\SellingPartnerApi\Model\ProductTypeDefinitions\PropertyGroup]**](PropertyGroup.md) | Mapping of property group names to property groups. Property groups represent logical groupings of schema properties that can be used for display or informational purposes. |
**locale** | **string** | Locale of the display elements contained in the product type definition. |
**marketplace_ids** | **string[]** | Amazon marketplace identifiers for which the product type definition is applicable. |
**product_type** | **string** | The name of the Amazon product type that this product type definition applies to. |
**product_type_version** | [**\SellingPartnerApi\Model\ProductTypeDefinitions\ProductTypeVersion**](ProductTypeVersion.md) |  |

[[ProductTypeDefinitions Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
