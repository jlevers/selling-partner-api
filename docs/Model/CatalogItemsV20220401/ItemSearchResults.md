## ItemSearchResults

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number_of_results** | **int** | For `identifiers`-based searches, the total number of Amazon catalog items found. For `keywords`-based searches, the estimated total number of Amazon catalog items matched by the search query (only results up to the page count limit will be returned per request regardless of the number found).<br><br>Note: The maximum number of items (ASINs) that can be returned and paged through is 1000. |
**pagination** | [**\SellingPartnerApi\Model\CatalogItemsV20220401\Pagination**](Pagination.md) |  |
**refinements** | [**\SellingPartnerApi\Model\CatalogItemsV20220401\Refinements**](Refinements.md) |  |
**items** | [**\SellingPartnerApi\Model\CatalogItemsV20220401\Item[]**](Item.md) | A list of items from the Amazon catalog. |

[[CatalogItemsV20220401 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
