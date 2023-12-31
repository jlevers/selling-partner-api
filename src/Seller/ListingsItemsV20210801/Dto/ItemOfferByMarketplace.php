<?php

namespace SellingPartnerApi\Seller\ListingsItemsV20210801\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemOfferByMarketplace extends BaseDto
{
    /**
     * @param  string  $marketplaceId Amazon marketplace identifier.
     * @param  string  $offerType Type of offer for the listings item.
     * @param  Money  $money The currency type and the amount.
     * @param  Points  $points The number of Amazon Points offered with the purchase of an item, and their monetary value. Note that the Points element is only returned in Japan (JP).
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly string $offerType,
        public readonly ?Money $money = null,
        public readonly ?Points $points = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
