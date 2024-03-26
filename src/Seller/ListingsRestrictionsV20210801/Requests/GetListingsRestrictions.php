<?php

namespace SellingPartnerApi\Seller\ListingsRestrictionsV20210801\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\ListingsRestrictionsV20210801\Responses\ErrorList;
use SellingPartnerApi\Seller\ListingsRestrictionsV20210801\Responses\RestrictionList;

/**
 * getListingsRestrictions
 */
class GetListingsRestrictions extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     * @param  string  $sellerId  A selling partner identifier, such as a merchant account.
     * @param  array  $marketplaceIds  A comma-delimited list of Amazon marketplace identifiers for the request.
     * @param  ?string  $conditionType  The condition used to filter restrictions.
     * @param  ?string  $reasonLocale  A locale for reason text localization. When not provided, the default language code of the first marketplace is used. Examples: "en_US", "fr_CA", "fr_FR". Localized messages default to "en_US" when a localization is not available in the specified locale.
     */
    public function __construct(
        protected string $asin,
        protected string $sellerId,
        protected array $marketplaceIds,
        protected ?string $conditionType = null,
        protected ?string $reasonLocale = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'asin' => $this->asin,
            'sellerId' => $this->sellerId,
            'marketplaceIds' => $this->marketplaceIds,
            'conditionType' => $this->conditionType,
            'reasonLocale' => $this->reasonLocale,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return '/listings/2021-08-01/restrictions';
    }

    public function createDtoFromResponse(Response $response): RestrictionList|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => RestrictionList::class,
            400, 403, 404, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
