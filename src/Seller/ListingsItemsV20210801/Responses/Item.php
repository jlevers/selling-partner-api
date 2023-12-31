<?php

namespace SellingPartnerApi\Seller\ListingsItemsV20210801\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class Item extends BaseResponse
{
    /**
     * @param  string  $sku A selling partner provided identifier for an Amazon listing.
     * @param  ItemSummaryByMarketplace[]  $summaries Summary details of a listings item.
     * @param  array  $attributes JSON object containing structured listings item attribute data keyed by attribute name.
     * @param  Issue[]  $issues Issues associated with the listings item.
     * @param  ItemOfferByMarketplace[]  $offers Offer details for the listings item.
     * @param  FulfillmentAvailability[]  $fulfillmentAvailability Fulfillment availability for the listings item.
     * @param  ItemProcurement[]  $procurement Vendor procurement information for the listings item.
     */
    public function __construct(
        public readonly string $sku,
        public readonly ?array $summaries = null,
        public readonly ?array $attributes = null,
        public readonly ?array $issues = null,
        public readonly ?array $offers = null,
        public readonly ?array $fulfillmentAvailability = null,
        public readonly ?array $procurement = null,
    ) {
    }
}
