<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\CatalogItemsV0\Requests\ListCatalogCategories;

class Api extends BaseResource
{
    /**
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace for the item.
     * @param  ?string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     * @param  ?string  $sellerSku  Used to identify items in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.
     */
    public function listCatalogCategories(
        string $marketplaceId,
        ?string $asin = null,
        ?string $sellerSku = null,
    ): Response {
        $request = new ListCatalogCategories($marketplaceId, $asin, $sellerSku);

        return $this->connector->send($request);
    }
}
