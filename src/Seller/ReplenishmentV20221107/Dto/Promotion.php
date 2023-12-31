<?php

namespace SellingPartnerApi\Seller\ReplenishmentV20221107\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Promotion extends BaseDto
{
    /**
     * @param  DiscountFunding  $sellingPartnerFundedBaseDiscount The discount funding on the offer.
     * @param  DiscountFunding  $sellingPartnerFundedTieredDiscount The discount funding on the offer.
     * @param  DiscountFunding  $amazonFundedBaseDiscount The discount funding on the offer.
     * @param  DiscountFunding  $amazonFundedTieredDiscount The discount funding on the offer.
     */
    public function __construct(
        public readonly DiscountFunding $sellingPartnerFundedBaseDiscount,
        public readonly DiscountFunding $sellingPartnerFundedTieredDiscount,
        public readonly DiscountFunding $amazonFundedBaseDiscount,
        public readonly DiscountFunding $amazonFundedTieredDiscount,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
