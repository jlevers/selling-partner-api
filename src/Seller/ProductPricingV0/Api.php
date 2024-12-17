<?php

namespace SellingPartnerApi\Seller\ProductPricingV0;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\ProductPricingV0\Dto\GetItemOffersBatchRequest;
use SellingPartnerApi\Seller\ProductPricingV0\Dto\GetListingOffersBatchRequest;
use SellingPartnerApi\Seller\ProductPricingV0\Requests\GetCompetitivePricing;
use SellingPartnerApi\Seller\ProductPricingV0\Requests\GetItemOffers;
use SellingPartnerApi\Seller\ProductPricingV0\Requests\GetItemOffersBatch;
use SellingPartnerApi\Seller\ProductPricingV0\Requests\GetListingOffers;
use SellingPartnerApi\Seller\ProductPricingV0\Requests\GetListingOffersBatch;
use SellingPartnerApi\Seller\ProductPricingV0\Requests\GetPricing;

class Api extends BaseResource
{
    /**
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace for which prices are returned.
     * @param  string  $itemType  Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter.
     * @param  ?array  $asins  A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace.
     * @param  ?array  $skus  A list of up to twenty seller SKU values used to identify items in the given marketplace.
     * @param  ?string  $itemCondition  Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club.
     * @param  ?string  $offerType  Indicates whether to request pricing information for the seller's B2C or B2B offers. Default is B2C.
     */
    public function getPricing(
        string $marketplaceId,
        string $itemType,
        ?array $asins = null,
        ?array $skus = null,
        ?string $itemCondition = null,
        ?string $offerType = null,
    ): Response {
        $request = new GetPricing($marketplaceId, $itemType, $asins, $skus, $itemCondition, $offerType);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace for which prices are returned.
     * @param  string  $itemType  Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. Possible values: Asin, Sku.
     * @param  ?array  $asins  A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace.
     * @param  ?array  $skus  A list of up to twenty seller SKU values used to identify items in the given marketplace.
     * @param  ?string  $customerType  Indicates whether to request pricing information from the point of view of Consumer or Business buyers. Default is Consumer.
     */
    public function getCompetitivePricing(
        string $marketplaceId,
        string $itemType,
        ?array $asins = null,
        ?array $skus = null,
        ?string $customerType = null,
    ): Response {
        $request = new GetCompetitivePricing($marketplaceId, $itemType, $asins, $skus, $customerType);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $sellerSku  Identifies an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace for which prices are returned.
     * @param  string  $itemCondition  Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club.
     * @param  ?string  $customerType  Indicates whether to request Consumer or Business offers. Default is Consumer.
     */
    public function getListingOffers(
        string $sellerSku,
        string $marketplaceId,
        string $itemCondition,
        ?string $customerType = null,
    ): Response {
        $request = new GetListingOffers($sellerSku, $marketplaceId, $itemCondition, $customerType);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace for which prices are returned.
     * @param  string  $itemCondition  Filters the offer listings to be considered based on item condition. Possible values: New, Used, Collectible, Refurbished, Club.
     * @param  ?string  $customerType  Indicates whether to request Consumer or Business offers. Default is Consumer.
     */
    public function getItemOffers(
        string $asin,
        string $marketplaceId,
        string $itemCondition,
        ?string $customerType = null,
    ): Response {
        $request = new GetItemOffers($asin, $marketplaceId, $itemCondition, $customerType);

        return $this->connector->send($request);
    }

    /**
     * @param  GetItemOffersBatchRequest  $getItemOffersBatchRequest  The request associated with the `getItemOffersBatch` API call.
     */
    public function getItemOffersBatch(GetItemOffersBatchRequest $getItemOffersBatchRequest): Response
    {
        $request = new GetItemOffersBatch($getItemOffersBatchRequest);

        return $this->connector->send($request);
    }

    /**
     * @param  GetListingOffersBatchRequest  $getListingOffersBatchRequest  The request associated with the `getListingOffersBatch` API call.
     */
    public function getListingOffersBatch(GetListingOffersBatchRequest $getListingOffersBatchRequest): Response
    {
        $request = new GetListingOffersBatch($getListingOffersBatchRequest);

        return $this->connector->send($request);
    }
}
