## ItemSearchResults

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number_of_results** | **int** | The estimated total number of products matched by the search query (only results up to the page count limit will be returned per request regardless of the number found).<br><br>Note: The maximum number of items (ASINs) that can be returned and paged through is 1000. |
**pagination** | [**\SellingPartnerApi\Model\CatalogItemsV20201201\Pagination**](Pagination.md) |  |
**refinements** | [**\SellingPartnerApi\Model\CatalogItemsV20201201\Refinements**](Refinements.md) |  |
**items** | [**\SellingPartnerApi\Model\CatalogItemsV20201201\Item[]**](Item.md) | A list of items from the Amazon catalog. |

[[CatalogItemsV20201201 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
