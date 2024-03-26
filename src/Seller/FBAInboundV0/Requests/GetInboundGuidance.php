<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\FBAInboundV0\Responses\GetInboundGuidanceResponse;

/**
 * getInboundGuidance
 */
class GetInboundGuidance extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace where the product would be stored.
     * @param  ?array  $sellerSkuList  A list of SellerSKU values. Used to identify items for which you want inbound guidance for shipment to Amazon's fulfillment network. Note: SellerSKU is qualified by the SellerId, which is included with every Selling Partner API operation that you submit. If you specify a SellerSKU that identifies a variation parent ASIN, this operation returns an error. A variation parent ASIN represents a generic product that cannot be sold. Variation child ASINs represent products that have specific characteristics (such as size and color) and can be sold.
     * @param  ?array  $asinList  A list of ASIN values. Used to identify items for which you want inbound guidance for shipment to Amazon's fulfillment network. Note: If you specify a ASIN that identifies a variation parent ASIN, this operation returns an error. A variation parent ASIN represents a generic product that cannot be sold. Variation child ASINs represent products that have specific characteristics (such as size and color) and can be sold.
     */
    public function __construct(
        protected string $marketplaceId,
        protected ?array $sellerSkuList = null,
        protected ?array $asinList = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['MarketplaceId' => $this->marketplaceId, 'SellerSKUList' => $this->sellerSkuList, 'ASINList' => $this->asinList]);
    }

    public function resolveEndpoint(): string
    {
        return '/fba/inbound/v0/itemsGuidance';
    }

    public function createDtoFromResponse(Response $response): GetInboundGuidanceResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200, 400, 401, 403, 404, 429, 500, 503 => GetInboundGuidanceResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
