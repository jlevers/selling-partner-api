<?php

namespace SellingPartnerApi\Seller\ProductFeesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PriceToEstimateFees extends BaseDto
{
    protected static array $attributeMap = [
        'listingPrice' => 'ListingPrice',
        'shipping' => 'Shipping',
        'points' => 'Points',
    ];

    /**
     * @param  ?MoneyType  $shipping
     * @param  ?Points  $points
     */
    public function __construct(
        public readonly MoneyType $listingPrice,
        public readonly ?MoneyType $shipping = null,
        public readonly ?Points $points = null,
    ) {
    }
}
