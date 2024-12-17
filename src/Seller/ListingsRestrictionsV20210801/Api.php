<?php

namespace SellingPartnerApi\Seller\ListingsRestrictionsV20210801;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\ListingsRestrictionsV20210801\Requests\GetListingsRestrictions;

class Api extends BaseResource
{
    /**
     * @param  string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     * @param  string  $sellerId  A selling partner identifier, such as a merchant account.
     * @param  array  $marketplaceIds  A comma-delimited list of Amazon marketplace identifiers for the request.
     * @param  ?string  $conditionType  The condition used to filter restrictions.
     * @param  ?string  $reasonLocale  A locale for reason text localization. When not provided, the default language code of the first marketplace is used. Examples: "en_US", "fr_CA", "fr_FR". Localized messages default to "en_US" when a localization is not available in the specified locale.
     */
    public function getListingsRestrictions(
        string $asin,
        string $sellerId,
        array $marketplaceIds,
        ?string $conditionType = null,
        ?string $reasonLocale = null,
    ): Response {
        $request = new GetListingsRestrictions($asin, $sellerId, $marketplaceIds, $conditionType, $reasonLocale);

        return $this->connector->send($request);
    }
}
