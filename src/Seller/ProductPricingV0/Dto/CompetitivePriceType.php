<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CompetitivePriceType extends BaseDto
{
    protected static array $attributeMap = ['competitivePriceId' => 'CompetitivePriceId', 'price' => 'Price'];

    /**
     * @param  string  $competitivePriceId  The pricing model for each price that is returned.
     *
     * Possible values:
     *
     * * 1 - New Buy Box Price.
     * * 2 - Used Buy Box Price.
     * @param  ?string  $condition  Indicates the condition of the item whose pricing information is returned. Possible values are: New, Used, Collectible, Refurbished, or Club.
     * @param  ?string  $subcondition  Indicates the subcondition of the item whose pricing information is returned. Possible values are: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty, Refurbished, Open Box, or Other.
     * @param  ?string  $offerType
     * @param  ?int  $quantityTier  Indicates at what quantity this price becomes active.
     * @param  ?string  $quantityDiscountType
     * @param  ?string  $sellerId  The seller identifier for the offer.
     * @param  ?bool  $belongsToRequester  Indicates whether or not the pricing information is for an offer listing that belongs to the requester. The requester is the seller associated with the SellerId that was submitted with the request. Possible values are: true and false.
     */
    public function __construct(
        public readonly string $competitivePriceId,
        public readonly PriceType $price,
        public readonly ?string $condition = null,
        public readonly ?string $subcondition = null,
        public readonly ?string $offerType = null,
        public readonly ?int $quantityTier = null,
        public readonly ?string $quantityDiscountType = null,
        public readonly ?string $sellerId = null,
        public readonly ?bool $belongsToRequester = null,
    ) {
    }
}
