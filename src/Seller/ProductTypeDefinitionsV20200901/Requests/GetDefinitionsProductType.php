<?php

namespace SellingPartnerApi\Seller\ProductTypeDefinitionsV20200901\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\ProductTypeDefinitionsV20200901\Responses\ErrorList;
use SellingPartnerApi\Seller\ProductTypeDefinitionsV20200901\Responses\ProductTypeDefinition;

/**
 * getDefinitionsProductType
 */
class GetDefinitionsProductType extends Request
{
    protected Method $method = Method::GET;

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
    public function __construct(
        protected string $productType,
        protected array $marketplaceIds,
        protected ?string $sellerId = null,
        protected ?string $productTypeVersion = null,
        protected ?string $requirements = null,
        protected ?string $requirementsEnforced = null,
        protected ?string $locale = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'marketplaceIds' => $this->marketplaceIds,
            'sellerId' => $this->sellerId,
            'productTypeVersion' => $this->productTypeVersion,
            'requirements' => $this->requirements,
            'requirementsEnforced' => $this->requirementsEnforced,
            'locale' => $this->locale,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return "/definitions/2020-09-01/productTypes/{$this->productType}";
    }

    public function createDtoFromResponse(Response $response): ProductTypeDefinition|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ProductTypeDefinition::class,
            400, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
