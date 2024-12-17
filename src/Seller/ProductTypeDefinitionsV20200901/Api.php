<?php

namespace SellingPartnerApi\Seller\ProductTypeDefinitionsV20200901;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\ProductTypeDefinitionsV20200901\Requests\GetDefinitionsProductType;
use SellingPartnerApi\Seller\ProductTypeDefinitionsV20200901\Requests\SearchDefinitionsProductTypes;

class Api extends BaseResource
{
    /**
     * @param  array  $marketplaceIds  A comma-delimited list of Amazon marketplace identifiers for the request.
     * @param  ?array  $keywords  A comma-delimited list of keywords to search product types. **Note:** Cannot be used with `itemName`.
     * @param  ?string  $itemName  The title of the ASIN to get the product type recommendation. **Note:** Cannot be used with `keywords`.
     * @param  ?string  $locale  The locale for the display names in the response. Defaults to the primary locale of the marketplace.
     * @param  ?string  $searchLocale  The locale used for the `keywords` and `itemName` parameters. Defaults to the primary locale of the marketplace.
     */
    public function searchDefinitionsProductTypes(
        array $marketplaceIds,
        ?array $keywords = null,
        ?string $itemName = null,
        ?string $locale = null,
        ?string $searchLocale = null,
    ): Response {
        $request = new SearchDefinitionsProductTypes($marketplaceIds, $keywords, $itemName, $locale, $searchLocale);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $productType  The Amazon product type name.
     * @param  array  $marketplaceIds  A comma-delimited list of Amazon marketplace identifiers for the request.
     *                                 Note: This parameter is limited to one marketplaceId at this time.
     * @param  ?string  $sellerId  A selling partner identifier. When provided, seller-specific requirements and values are populated within the product type definition schema, such as brand names associated with the selling partner.
     * @param  ?string  $productTypeVersion  The version of the Amazon product type to retrieve. Defaults to "LATEST",. Prerelease versions of product type definitions may be retrieved with "RELEASE_CANDIDATE". If no prerelease version is currently available, the "LATEST" live version will be provided.
     * @param  ?string  $requirements  The name of the requirements set to retrieve requirements for.
     * @param  ?string  $requirementsEnforced  Identifies if the required attributes for a requirements set are enforced by the product type definition schema. Non-enforced requirements enable structural validation of individual attributes without all the required attributes being present (such as for partial updates).
     * @param  ?string  $locale  Locale for retrieving display labels and other presentation details. Defaults to the default language of the first marketplace in the request.
     */
    public function getDefinitionsProductType(
        string $productType,
        array $marketplaceIds,
        ?string $sellerId = null,
        ?string $productTypeVersion = null,
        ?string $requirements = null,
        ?string $requirementsEnforced = null,
        ?string $locale = null,
    ): Response {
        $request = new GetDefinitionsProductType($productType, $marketplaceIds, $sellerId, $productTypeVersion, $requirements, $requirementsEnforced, $locale);

        return $this->connector->send($request);
    }
}
