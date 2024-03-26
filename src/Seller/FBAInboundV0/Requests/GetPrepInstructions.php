<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\FBAInboundV0\Responses\GetPrepInstructionsResponse;

/**
 * getPrepInstructions
 */
class GetPrepInstructions extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $shipToCountryCode  The country code of the country to which the items will be shipped. Note that labeling requirements and item preparation instructions can vary by country.
     * @param  ?array  $sellerSkuList  A list of SellerSKU values. Used to identify items for which you want labeling requirements and item preparation instructions for shipment to Amazon's fulfillment network. The SellerSKU is qualified by the Seller ID, which is included with every call to the Seller Partner API.
     *
     * Note: Include seller SKUs that you have used to list items on Amazon's retail website. If you include a seller SKU that you have never used to list an item on Amazon's retail website, the seller SKU is returned in the InvalidSKUList property in the response.
     * @param  ?array  $asinList  A list of ASIN values. Used to identify items for which you want item preparation instructions to help with item sourcing decisions.
     *
     * Note: ASINs must be included in the product catalog for at least one of the marketplaces that the seller  participates in. Any ASIN that is not included in the product catalog for at least one of the marketplaces that the seller participates in is returned in the InvalidASINList property in the response. You can find out which marketplaces a seller participates in by calling the getMarketplaceParticipations operation in the Selling Partner API for Sellers.
     */
    public function __construct(
        protected string $shipToCountryCode,
        protected ?array $sellerSkuList = null,
        protected ?array $asinList = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'ShipToCountryCode' => $this->shipToCountryCode,
            'SellerSKUList' => $this->sellerSkuList,
            'ASINList' => $this->asinList,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return '/fba/inbound/v0/prepInstructions';
    }

    public function createDtoFromResponse(Response $response): GetPrepInstructionsResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => GetPrepInstructionsResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
